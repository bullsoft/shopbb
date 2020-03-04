<?php
namespace LightCloud\Uc\Events;
use Ph\{
    EventsManager,
    ModelsManager,
    Di,
};
use LightCloud\Uc\Auth\{
    Model as AuthModel,
    User,
};
use PhalconPlus\Contracts\{
    EventAttachable,
};

class Model implements EventAttachable
{
    public function __construct()
    {
        ModelsManager::setEventsManager(Di::get('eventsManager'));
    }

    /**
     * @param param User
     */
    public function attach($param = null)
    {
        $user = Di::has('user') ? Di::get('user') : User::guest();
        EventsManager::attach("model", new AuthModel($user));
    }
}