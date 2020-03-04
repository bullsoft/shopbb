<?php
namespace PhalconPlus\DevTools\Providers;

use Phalcon\DiInterface;
use Phalcon\Di\ServiceProviderInterface;

use Ph\{Config, App, };

class RouterServiceProvider implements ServiceProviderInterface
{
    public function register(DiInterface $di) : void
    {
        // register rules for router
        $di->setShared('router', function() {
            $router = new \Phalcon\CLI\Router();
            return $router;
        });
    }
}