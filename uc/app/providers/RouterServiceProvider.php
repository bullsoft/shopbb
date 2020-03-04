<?php
namespace LightCloud\Uc\Providers;

use Phalcon\DiInterface;
use Phalcon\Di\ServiceProviderInterface;
use Phalcon\Mvc\Router;

use Ph\{Config, App, };

class RouterServiceProvider implements ServiceProviderInterface
{
    public function register(DiInterface $di) : void
    {
        // register rules for router
        $di->setShared('router', function () {
            $router = new \Phalcon\Mvc\Router(false);
            $router->removeExtraSlashes(true);
            $router->setUriSource(Router::URI_SOURCE_SERVER_REQUEST_URI);
            $router->mount(new \LightCloud\Uc\Routes\Bare());
            $router->mount(new \LightCloud\Uc\Routes\OAuth());
            $router->mount(new \LightCloud\Uc\Routes\Api());
            return $router;
        });
    }
}