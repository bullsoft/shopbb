<?php
namespace LightCloud\Uc;

use PhalconPlus\Base\AbstractModule as PlusModule;
use PhalconPlus\Logger\Processor\Trace as TraceProcessor;
use PhalconPlus\Logger\Processor\Uid as UidProcessor;
use Phalcon\Mvc\Model\Metadata\Memory as MetaData;
use Phalcon\Session\Adapter\Redis as SessionRedis;

if(!function_exists("getSiteConf")) {
    function getSiteConf() 
    {
        static $siteConf = [];
        $siteConfPath = APP_MODULE_DIR . "app/config/siteConf.php";
        if(empty($siteConf) && is_file($siteConfPath)) {
            $siteConf = include($siteConfPath);
        }
        return new \Phalcon\Config($siteConf);
    }
}

class Module extends PlusModule
{
    public function __construct(\Phalcon\Di $di, \PhalconPlus\Base\ModuleDef $def)
    {
        parent::__construct($di, $def);
        // set_exception_handler(function ($exception) use ($di) {
        //     $response = $di->get("response");
        //     $errorMsg = $msg = $exception->getMessage();
        //     $data = new \stdClass();
        //     if(($offset = \strpos($msg, "__DATA__")) !== false) {
        //         $errorMsg = \substr($msg, 0, $offset);
        //         $dataMsg = substr($msg, $offset+\strlen("__DATA__"));
        //         $data = json_decode($dataMsg, true);
        //     }
        //     $error = array(
        //         'errorCode' => max(1, $exception->getCode()),
        //         'errorMsg' => $errorMsg,
        //         'data' => $data??(new \stdClass()),
        //         'sessionId' => '',
        //     );
        //     $response->setHeader('Content-Type', 'application/json');
        //     $response->setJsonContent($error);
        //     $response->send();
        // });  
            
    }

    public function registerAutoloaders()
    {
        $loader = new \Phalcon\Loader();
        $loader->registerNamespaces(array(
            __NAMESPACE__.'\\Controllers'  => __DIR__.'/controllers/',
            __NAMESPACE__.'\\Controllers\\Apis'  => __DIR__.'/controllers/apis/',
            __NAMESPACE__.'\\Controllers\\OAuth' => __DIR__.'/controllers/oauth/',
            __NAMESPACE__.'\\Models'       => __DIR__.'/models/',
            __NAMESPACE__.'\\Plugins'      => __DIR__.'/plugins/',
            __NAMESPACE__."\\Repositories" => __DIR__.'/repositories/',
            __NAMESPACE__."\\Entities"     => __DIR__.'/entities/',
            "LightCloud\\Com\\Protos\\Uc"  => APP_ROOT_COMMON_DIR.'/protos/Uc/',
            "PhalconPlus\\Com\\Protos"     => APP_ROOT_COMMON_DIR.'/protos/',
        ))->register();
    }
    
    public function registerServices()
    {
        // get di
        $di = $this->getDi();
        // get bootstrap obj
        $bootstrap = $this->getBootstrap();
        // get config
        $config = $di->get('config');
        $that = $this;
        // load env from {$root}/.env
        if(\PhalconPlus\Enum\RunEnv::isInProd(APP_RUN_ENV)) {
            if(\file_exists(APP_ROOT_DIR.".env")) {
                $dotenv = \Dotenv\Dotenv::create(APP_ROOT_DIR);
                $dotenv->load();
            }
        }

        if($this->isPrimary()) {
            $di->set('myConfig', function() use($that) {
                return $that->getDef()->getConfig();
            });
        }

        $di->setShared("url", function() use ($config) {
            $url = new \Phalcon\Mvc\Url();
            $url->setBaseUri($config->application->url);
            return $url;
        });

        $di->setShared("logger", function() use ($di, $config){
            $logger = new \PhalconPlus\Logger\Adapter\FilePlus($config->application->logFilePath);
            $logger->registerExtension(".debug", [\Phalcon\Logger::DEBUG]);
            
            // 添加formatter
            $formatter = new \PhalconPlus\Logger\Formatter\LinePlus("[%date%][%trace%][%uid%][%type%] %message%");
            $formatter->addProcessor("uid", new UidProcessor(18));
            $formatter->addProcessor("trace", new TraceProcessor(TraceProcessor::T_CLASS));
            
            $logger->setFormatter($formatter);
            return $logger;
        });
        
        $router = $di->getShared("router");
        if($router instanceof \Phalcon\Mvc\Router) {
            $router->add('/apis/:controller/([a-zA-Z0-9_\-]+)/:params', array(
                'controller' => 1,
                'action'     => 2,
                'params'     => 3,
                'namespace'  => __NAMESPACE__ . "\\Controllers\\Apis",
            ))->convert('action', function ($action) {
                return lcfirst(\Phalcon\Text::camelize($action));
            });
            $router->add('/oauth/:controller', array(
                'controller' => 1,
                'action'     => "index",
                'namespace'  => __NAMESPACE__ . "\\Controllers\\OAuth",
            ));
            $router->add('/oauth/:controller/([a-zA-Z0-9_\-]*)/:params', array(
                'controller' => 1,
                'action'     => 2,
                'params'     => 3,
                'namespace'  => __NAMESPACE__ . "\\Controllers\\OAuth",
            ))->convert('action', function ($action) {
                return lcfirst(\Phalcon\Text::camelize($action));
            });
        }

        // register db write service
        $di->setShared('db', function() use ($di) {
            $mysql = new \PhalconPlus\Db\Mysql($di, "db");
            return $mysql->getConnection();
        });

        // register db read service
        $di->setShared('dbRead', function() use ($di) {
            $mysql = new \PhalconPlus\Db\Mysql($di, "db");
            return $mysql->getConnection();
        });

        $di->set('modelsMetadata', new MetaData());

        // check if this module is a primary one?
        if($this->isPrimary()) {
            // register a dispatcher
            $di->set('dispatcher', function () use ($di) {
                $evtManager = $di->getShared('eventsManager');
                $evtManager->attach("dispatch:beforeException", function ($event, $dispatcher, $exception) {
                    if($dispatcher->hasParam("ApiException")) {
                        throw $exception;
                    }
                    switch ($exception->getCode()) {
                        case \Phalcon\Mvc\Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
                        case \Phalcon\Mvc\Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
                            $dispatcher->forward(array(
                                'controller' => "error",
                                'action'     => 'show404'
                            ));
                            return false;
                        default:
                            $dispatcher->forward(array(
                                'controller' => "error",
                                'action'     => 'showUnknown',
                                'params'     => [$exception],
                            ));
                            return false;
                    }
                });
                $evtManager->attach("dispatch:beforeForward", function($event, $dispatcher, array $forward) {                
                    $dispatcher->setNamespaceName(__NAMESPACE__."\\Controllers\\");    
                });
                $interceptor = new \LightCloud\Uc\Plugins\DispatcherInterceptor($di, $evtManager);
                $evtManager->attach('dispatch', $interceptor);
                $dispatcher = new \Phalcon\Mvc\Dispatcher();
                $dispatcher->setEventsManager($evtManager);
                $dispatcher->setDefaultNamespace(__NAMESPACE__."\\Controllers\\");
                return $dispatcher;
            }); 
        }  

        $di->setShared("mailClient", function() use($config) {
            return new \Postmark\PostmarkClient($config->mail->token);
        });

        
        $di->setShared('redis', function () use ($config) {
            $redis = new \Redis();
            $redis->connect($config->redis->host, $config->redis->port, 1, NULL, 100);
            return $redis;
        });

        $di->set("rpc", function() use ($di, $config, $bootstrap) {
            $client = null;
            if($config->debugRPC == true) {
                $bootstrap->dependModule("server"); // 可能需要修改
                $client = new \PhalconPlus\RPC\Client\Adapter\Local($di);
            } else {
                $remoteUrls = $config->demoServerUrl;
                $client = new \PhalconPlus\RPC\Client\Adapter\Remote($remoteUrls->toArray());
                $client->SetOpt(\YAR_OPT_CONNECT_TIMEOUT, 5);
            }
            return $client;
        });

        $di->setShared('session', function () use ($config) {
            $session = new SessionRedis($config->session->toArray());
            $session->start();
            return $session;
        });
        
        // set view with volt
        $di->set('view', function() use ($di) {
            $view = new \Phalcon\Mvc\View();
            $view->setViewsDir(__DIR__.'/views/');
            $view->setViewsDir(__DIR__.'/views_stisla/');
            $view->registerEngines(array(
                ".volt" => function($view, $di) {
                    $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
                    $volt->setOptions(array(
                        "compiledPath"      => $di->get('config')->view->compiledPath,
                        "compiledExtension" => $di->get('config')->view->compiledExtension,
                    ));
                    // 如果模板缓存目录不存在，则创建它
                    if(!file_exists($di->get('config')->view->compiledPath)) {
                        mkdir($di->get('config')->view->compiledPath, 0777, true);
                    }
                    $compiler = $volt->getCompiler();
                    $ext = new \PhalconPlus\Volt\Extension\PhpFunction();
                    $ext->setCustNamespace(__NAMESPACE__.'\Plugins\\');
                    $compiler->addExtension($ext);
                    return $volt;
                }
            ));
            return $view;
        });

        
    }
}