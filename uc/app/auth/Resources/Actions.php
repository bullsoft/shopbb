<?php
namespace LightCloud\Uc\Auth\Resources;
use Ph\Acl;
use Phalcon\Acl\Resource as AclResource;
use PhalconPlus\Contracts\Auth\Access\ResourceAware;
use LightCloud\Uc\Controllers\{
    IndexController,
    ErrorController,
    UserController,
};

class Actions implements ResourceAware
{
    public function register()
    {
        foreach(glob(APP_MODULE_DIR."/app/controllers/*.php") as $filename) {
            $className = basename($filename, ".php");
            if($className == 'BaseController' || $className == 'ControllerBase') {
                continue;
            }
            $classNameWithNs = "LightCloud\\Uc\\Controllers\\".$className;
            $resource = new AclResource($classNameWithNs);
            $methods = get_class_methods($classNameWithNs);
            foreach($methods as $method) {
                if(substr($method, -6) == 'Action') {
                    Acl::addResource($resource, $method);
                }
            }
        }
        return $this;
    }

    public function control()
    {
        // IndexController
        Acl::allow('Guests', IndexController::class, 'captchaAction');
        Acl::allow('Customers', IndexController::class, 'indexAction');

        
        // ErrorController
        Acl::allow('Guests', ErrorController::class, '*');

        // UserController
        Acl::allow('Guests', UserController::class, 'loginAction');
        Acl::allow('Guests', UserController::class, 'registerAction');
        Acl::allow('Guests', UserController::class, 'forgotPasswordAction');

        
        Acl::allow('Customers', UserController::class, 'logoutAction');

        // 
        return $this;
    }
}