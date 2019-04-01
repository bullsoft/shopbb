<?php
namespace ShBB\Backend;

use PhalconPlus\Base\AbstractModule as PlusModule;

class CustomServer extends \PhalconPlus\Base\SimpleServer
{
    protected function onConstruct()
    {
        echo "<center>Service Started...</center>";
    }
}

class Srv extends PlusModule
{
    public function registerAutoloaders()
    {
        $loader = new \Phalcon\Loader();
        $loader->registerNamespaces(array(
            __NAMESPACE__.'\\Services' => __DIR__.'/services/',
            __NAMESPACE__.'\\Plugins'  => __DIR__.'/plugins/',
            __NAMESPACE__.'\\Models'   => __DIR__.'/models/',
            __NAMESPACE__.'\\Tasks'    => __DIR__.'/tasks/tasks/',
            __NAMESPACE__.'\\Daos'     => __DIR__.'/daos/',
            "Common\\Protos"           => APP_ROOT_COMMON_DIR.'/protos/',
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

        $di->setShared('backendSrv', function() use ($di) {
            $evtManager = $di->getShared("eventsManager");
            $listener = new \ShBB\Backend\Plugins\SrvListener($di, $evtManager);
            $evtManager->attach("backend-server", $listener);
            return new CustomServer($di);
            //return new \PhalconPlus\Base\SimpleServer($di);
        });

        // for tasks
        if($this->isPrimary()) {
            $di->set('dispatcher', function() {
                $dispatcher = new \Phalcon\Cli\Dispatcher();
                $dispatcher->setDefaultNamespace(__NAMESPACE__."\\Tasks\\");
                $dispatcher->setDefaultTask("hello");
                return $dispatcher;
            });
        }
    }
}
