<?php
namespace LightCloud\Uc\Auth\Resources;
use Phalcon\Acl\Resource as AclResource;
use PhalconPlus\Contracts\Auth\Access\ResourceAware;
use Ph\Acl;
use LightCloud\Uc\Models\UserModel;

class Models implements ResourceAware
{
    public function register()
    {   
        foreach(glob(APP_MODULE_DIR."/src/models/*.php") as $filename) {
            $className = basename($filename, ".php");
            if($className == 'BaseModel' || $className == 'ModelBase') {
                continue;
            }
            $classNameWithNs = "LightCloud\\Uc\\Models\\".$className;
            $resource = new AclResource($classNameWithNs);
            Acl::addResource($resource, [
                'view',
                'list',
                'update',
                'create',
                'delete'
            ]);
        }
        return $this;
    }

    public function control()
    {
        Acl::allow("Guests", UserModel::class, "view");
        return $this;
    }

}