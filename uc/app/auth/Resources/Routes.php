<?php
namespace LightCloud\Uc\Auth\Resources;
use Phalcon\Acl\Resource as AclResource;
use PhalconPlus\Contracts\Auth\Access\ResourceAware;
use Ph\Acl;

class Routes implements ResourceAware
{
    public function register()
    {
        $resource = new AclResource("Routes");
        Acl::addResource($resource, '/');
        Acl::addResource($resource, '/error/*');
        return $this;
    }

    public function control()
    {
        // Acl::allow('Guests', 'Routes', '*');
        Acl::allow('Guests', 'Routes', '/');
        Acl::allow('Guests', 'Routes', '/error/*');
        return $this;
    }
}