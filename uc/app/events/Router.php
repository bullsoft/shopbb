<?php
namespace LightCloud\Uc\Events;
use Ph\{
    EventsManager,
    Router as PhRouter,
    Di, Acl
};
use Phalcon\Events\Event;
use LightCloud\Uc\Auth\User;
use PhalconPlus\Contracts\{
    EventAttachable,
    Auth\Access\RouterEvent,
};

class Router implements EventAttachable, RouterEvent
{
    public function __construct()
    {
        PhRouter::setEventsManager(Di::get('eventsManager'));
    }

    public function attach($param = null)
    {
        EventsManager::attach("router", $this);
    }

    public function beforeCheckRoute(Event $event, \Phalcon\Mvc\Router $router, \Phalcon\Mvc\Router\Route $route)
    {
        // 
    }

    public function afterCheckRoutes(Event $event, \Phalcon\Mvc\Router $router)
    {
        // 
    }

    
    public function matchedRoute(Event $event, \Phalcon\Mvc\Router $router, \Phalcon\Mvc\Router\Route $route)
    {
        $user = Di::has('user') ? Di::get('user') : User::guest();
        $uri = $router->getRewriteUri();
        $wildcardUrl = '/'.strstr(ltrim($uri, '/'), '/', true).'/*';
        $isAllowed = Acl::isAllowed($user->getRole(), 'Routes', $uri);
        if($isAllowed == false) {
            $isAllowed = Acl::isAllowed($user->getRole(), 'Routes', $wildcardUrl);
        }
        // var_dump($route->getGroup());
        // var_dump($isAllowed);
    }
}