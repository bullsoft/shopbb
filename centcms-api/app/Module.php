<?php
namespace LightCloud\CentCMS\Api;

use PhalconPlus\Base\AbstractModule as PlusModule;
use PhalconPlus\Logger\Processor\Trace as TraceProcessor;
use PhalconPlus\Logger\Processor\LogId as LogIdProcessor;

class Module extends PlusModule
{
    public function registerAutoloaders()
    {
        $loader = new \Phalcon\Loader();
        $loader->registerNamespaces(array(
            __NAMESPACE__.'\\Controllers' => __DIR__.'/controllers/',
            __NAMESPACE__.'\\Controllers\\Apis' => __DIR__.'/controllers/apis/',
            __NAMESPACE__.'\\Models'      => __DIR__.'/models/',
            __NAMESPACE__.'\\Plugins'     => __DIR__.'/plugins/',
            "LightCloud\\Com\\Protos"     => APP_ROOT_COMMON_DIR.'/protos/',
        ))->register();

        // load composer library
        $composer = APP_ROOT_DIR . "/vendor/autoload.php";
        if(file_exists($composer)) {
            require_once $composer;
        }
    }
    
    public function registerServices()
    {
        // get di
        $di = $this->di;
        // get bootstrap obj
        $bootstrap = $di->get('bootstrap');
        // get config
        $config = $di->get('config');
        $that = $this;

        $router = $di->getShared("router");
        if($router instanceof \Phalcon\Mvc\Router) {
            $router->add('/apis/:controller/([a-zA-Z0-9_\-]+)/:params', array(
                'controller' => 1,
                'action'     => 2,
                'params'     => 3,
                'namespace'  => __NAMESPACE__ . "\\Controllers\\Apis",
            ))->convert('action', function ($action) {
                // transform action from foo-bar -> foo_bar
                $a = str_replace('-', '_', $action);
                // transform action from foo_bar -> fooBar
                return lcfirst(\Phalcon\Text::camelize($a));
            });
        }

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

        if($this->isPrimary()) {
            // register a dispatcher
            $di->has("dispatched") || $di->set('dispatcher', function () use ($di) {
                $evtManager = $di->getShared('eventsManager');
                $evtManager->attach("dispatch:beforeException", function ($event, $dispatcher, $exception) {
                    if(rtrim($dispatcher->getNamespaceName(), "\\") == __NAMESPACE__ ."\\Controllers\\Apis") {
                        throw $exception;
                    }
                    switch ($exception->getCode()) {
                        case \Phalcon\Mvc\Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
                        case \Phalcon\Mvc\Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
                            $dispatcher->forward(array(
                                'controller' => 'error',
                                'action'     => 'show404'
                            ));
                            return false;
                        default:
                            $dispatcher->forward(array(
                                'controller' => 'error',
                                'action'     => 'showUnknown',
                                "params"     => [$exception],
                            ));
                            return false;
                    }
                });

                $evtManager->attach("dispatch:beforeForward", function($event, $dispatcher, array $forward) {
                    $dispatcher->setNamespaceName(__NAMESPACE__."\\Controllers\\");
                });
                $interceptor = new \LightCloud\CentCMS\Api\Plugins\DispatcherInterceptor($di, $evtManager);
                $evtManager->attach('dispatch', $interceptor);
                $dispatcher = new \Phalcon\Mvc\Dispatcher();
                $dispatcher->setEventsManager($evtManager);
                $dispatcher->setDefaultNamespace(__NAMESPACE__."\\Controllers\\");
                return $dispatcher;
            });   
        }
        
        $di->set("rpc", function() use ($di, $config, $bootstrap) {
            $client = null;
            if($config->debugRPC == true) {
                $bootstrap->dependModule("centcms-backend"); // 可能需要修改
                $client = new \PhalconPlus\RPC\Client\Adapter\Local($di);
            } else {
                $remoteUrls = $config->demoServerUrl;
                $client = new \PhalconPlus\RPC\Client\Adapter\Remote($remoteUrls->toArray());
                $client->SetOpt(\YAR_OPT_CONNECT_TIMEOUT, 5);
            }
            return $client;
        });
        
        // set view with volt
        $di->set('view', function() use ($di) {
            $view = new \Phalcon\Mvc\View();
            $view->setViewsDir(__DIR__.'/views/');
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
                    $compiler->addExtension(new \PhalconPlus\Volt\Extension\PhpFunction());
                    return $volt;
                }
            ));
            return $view;
        });

        $di->setShared("logger", function() use ($config){
            $logger = new \PhalconPlus\Logger\MultipleFile($config->logger->toArray());
            $logger->addProcessor("logId", new LogIdProcessor(18));
            $logger->addProcessor("trace", new TraceProcessor(TraceProcessor::T_CLASS));
            // 添加formatter
            $formatter = new \Phalcon\Logger\Formatter\Line("[%date%][{trace}][{logId}][%type%] %message%");
            $formatter->setDateFormat("Y-m-d H:i:s");
            $logger->setFormatter($formatter);
            return $logger;
        });
    }
}