<?php
namespace PhalconPlus\DevTools;

class Task extends \PhalconPlus\Base\AbstractModule
{
    public function registerAutoloaders()
    {
        $loader = new \Phalcon\Loader();
        $loader->registerNamespaces(array(
            __NAMESPACE__.'\\Tasks' => __DIR__.'/tasks/',
            "PhalconPlus\\Com\\Protos" => APP_MODULE_DIR."/protos/",
        ))->register();
    }

    public function registerServices()
    {
        $di = $this->di;

        $di->set('dispatcher', function() use ($di) {
            $dispatcher = new \Phalcon\Cli\Dispatcher();
            $dispatcher->setDefaultNamespace(__NAMESPACE__."\\Tasks\\");
            $dispatcher->setDefaultTask("help");
            return $dispatcher;
        });
    }
}

