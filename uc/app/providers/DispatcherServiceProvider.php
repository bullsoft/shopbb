<?php
namespace LightCloud\Uc\Providers;

use Phalcon\DiInterface;
use Phalcon\Di\ServiceProviderInterface;

use Ph\{Config,};

class DispatcherServiceProvider implements ServiceProviderInterface
{
    public function register(DiInterface $di) : void
    {
        // register a dispatcher
        $di->setShared('dispatcher', function () {
            $evtManager = $this->getShared('eventsManager');
            $dispatcher = new \Phalcon\Mvc\Dispatcher();
            $dispatcher->setEventsManager($evtManager);
            $dispatcher->setDefaultNamespace(__NAMESPACE__."\\Controllers\\");
            return $dispatcher;
        });
    }
}