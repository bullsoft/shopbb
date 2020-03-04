<?php
namespace LightCloud\Uc\Events;
use PhalconPlus\Contracts\{
    EventAttachable,
};
class Provider implements EventAttachable
{
    protected $events = [
        "superapp"    => SuperApp::class,
        "acl"         => Acl::class,
        "application" => AppHandler::class,
        "dispatch"    => Dispatch::class,
        "model"       => Model::class,
        "router"      => Router::class,
    ];

    public function __construct()
    {
        // 
    }

    public function attach($param = null)
    {
        foreach($this->events as $eventClass) {
            $event = new $eventClass();
            $event->attach($param);
        }
    }
}