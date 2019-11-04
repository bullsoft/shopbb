<?php
namespace LightCloud\CentCMS\Backend;

use PhalconPlus\Base\AbstractModule as PlusModule;
use PhalconPlus\Logger\Processor\Trace as TraceProcessor;
use PhalconPlus\Logger\Processor\LogId as LogIdProcessor;
class Srv extends PlusModule
{
    public function registerAutoloaders()
    {
        $loader = new \Phalcon\Loader();
        $loader->registerNamespaces(array(
            __NAMESPACE__.'\\Services'     => __DIR__.'/services/',
            __NAMESPACE__.'\\Models'       => __DIR__.'/models/',
            __NAMESPACE__.'\\Tasks'        => __DIR__.'/tasks/tasks/',
            __NAMESPACE__.'\\Repositories' => __DIR__.'/repositories/',
            "LightCloud\\Com\\Protos"      => APP_ROOT_COMMON_DIR.'/protos/',
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

        // register db write service
        $di->setShared('dbCms', function() use ($di) {
            $mysql = new \PhalconPlus\Db\Mysql($di, "dbCms");
            return $mysql->getConnection();
        });

        // register db read service
        $di->setShared('dbCmsRead', function() use ($di) {
            $mysql = new \PhalconPlus\Db\Mysql($di, "dbCms");
            return $mysql->getConnection();
        });

        if($this->isPrimary()) {
            // for tasks
            $di->set('dispatcher', function() {
                $dispatcher = new \Phalcon\Cli\Dispatcher();
                $dispatcher->setDefaultNamespace(__NAMESPACE__."\\Tasks\\");
                $dispatcher->setDefaultTask("hello");
                return $dispatcher;
            });
        }

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
