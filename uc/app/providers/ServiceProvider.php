<?php
namespace LightCloud\Uc\Providers;

use Phalcon\DiInterface;
use Phalcon\Di\ServiceProviderInterface;
use PhalconPlus\App\Module\AbstractModule as AppModule;
use Ph\{Config, App, };

class ServiceProvider implements ServiceProviderInterface
{
    private $module;

    public function __construct(AppModule $module)
    {
        $this->module = $module;    
    }

    public function register(DiInterface $di) : void
    {
        if($this->module->isPrimary()) {
            $di->register(new RouterServiceProvider());
            $di->register(new DispatcherServiceProvider());
        }
        $di->register(new CookieServiceProvider());
        $di->register(new DatabaseServiceProvider());
        $di->register(new RedisServiceProvider());
        $di->register(new RpcServiceProvider());
        $di->register(new UrlServiceProvider());
        $di->register(new SessionServiceProvider());
        $di->register(new ViewServiceProvider());
        $di->register(new LoggerServiceProvider());
        $di->register(new MailServiceProvider());
    }
}