<?php
namespace LightCloud\Uc\Events;
use Ph\{
    EventsManager,
    Acl as PhAcl,
    Di,
};
use Phalcon\Events\Event;
use PhalconPlus\Contracts\{
    EventAttachable,
};

class Acl implements EventAttachable
{
    public function __construct()
    {
        PhAcl::setEventsManager(Di::get('eventsManager'));
    }

    public function attach($param = null)
    {
        EventsManager::attach("acl", $this);
    }

    public function beforeCheckAccess(Event $event, \Phalcon\Acl\Adapter $acl)
    {
        // 
    }
}