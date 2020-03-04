<?php
namespace PhalconPlus\DevTools\Providers;

use Phalcon\DiInterface;
use Phalcon\Di\ServiceProviderInterface;

use Ph\{Config,};

class DispatcherServiceProvider implements ServiceProviderInterface
{
    public function register(DiInterface $di) : void
    {
        // register a dispatcher
        $di->setShared('dispatcher', function() {
            $dispatcher = new \Phalcon\Cli\Dispatcher();
            $dispatcher->setDefaultNamespace("PhalconPlus\\DevTools\\Tasks\\");
            $dispatcher->setDefaultTask("help");
            return $dispatcher;
        });
    }
}