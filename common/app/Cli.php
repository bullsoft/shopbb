<?php
namespace PhalconPlus\DevTools;
use PhalconPlus\App\Module\AbstractModule as AppModule;
use PhalconPlus\DevTools\Providers\ServiceProvider;
use Ph\{Di, Config, App,};

class Cli extends AppModule
{
    public function registerAutoloaders()
    {
        Di::get('loader')->registerNamespaces(array(
            __NAMESPACE__.'\\Tasks'     => __DIR__.'/tasks/',
            __NAMESPACE__."\\Providers" => __DIR__.'/providers/',
            "PhalconPlus\\Com\\Protos"  => APP_MODULE_DIR."/protos/",
        ))->register();
    }

    public function registerServices()
    {
        Di::register(new ServiceProvider($this));
    }
}

