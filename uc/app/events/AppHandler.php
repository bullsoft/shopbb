<?php
namespace LightCloud\Uc\Events;

use Phalcon\Events\Event;
use Phalcon\Http\Response;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Application as PhApp;
use Phalcon\Acl\Role;
use Ph\{
    EventsManager, App as SuperApp, Di, Acl, Router,
    Annotations, View, Session, Config, Request, Security,
}; 
use LightCloud\Uc\Auth\Resources\{
    Actions, Models, Routes
};
use LightCloud\Uc\Exceptions\Handler as ExceptionHandler;
use LightCloud\Uc\Auth\User;
use PhalconPlus\Contracts\{
    EventAttachable,
};

class AppHandler implements EventAttachable
{
    public function __construct()
    {
        // SuperApp::engine()
        //     ->getHandler()
        //     ->setEventsManager(Di::get('eventsManager'));
    }

    public function attach($param = null)
    {
        EventsManager::attach("application", $this);
    }

    public function boot(Event $event, PhApp $app)
    {
        foreach(Config::path('application.roles') as $role => $inheritList) {
            Acl::addRole(new Role($role));
            foreach($inheritList as $roleToInherit) {
                Acl::addInherit($role, $roleToInherit);
            }
        }
        try {
            (new Actions())->register()->control();
            (new Models())->register()->control();
            (new Routes())->register()->control();
        } catch(\Exception $e) {
            ExceptionHandler::catch($e);
            throw $e;   
        }   
    }

    public function beforeHandleRequest(Event $event, PhApp $application, Dispatcher $dispatcher)
    {
        // error_log("Rewrite Uri" . Router::getRewriteUri());
        $route = Router::getMatchedRoute();

        if(substr($route->getName(), 0, 3) == 'api') {
            // Api访问应该用Token来获取用户信息
            User::tryToLoginWithToken();
        } else {
            Session::start();
            if(Request::has('sessionId')) { 
                Session::setId(Request::get('sessionId')); 
            }
            // if(Request::isPost()) {
            //     if(!Security::checkToken()) {
            //         throw new \PhalconPlus\Base\Exception([
            //             "Token %s not given, exception in %s",
            //             [
            //                 Security::getTokenKey(),
            //                 __METHOD__
            //             ]
            //         ]);
            //     }
            // }
            User::tryToLogin();
        } 

        $controller = $dispatcher->getControllerClass();
        $method = $dispatcher->getActiveMethod();
        // Action注解分析
        $anno = Annotations::getMethod($controller, $method);
        // 禁止模板
        if($anno->has('disableView') || $anno->has('api')) {
            View::disable();
        }
        if($anno->has('disableGuests')) {
            Acl::deny("Guests", $controller, $method);
        }
        if($anno->has('allowGuests')) {
            Acl::allow("Guests", $controller, $method);
        }
        if(rtrim($dispatcher->getNamespaceName(), "\\") == "LightCloud\\Uc\\Controllers\\Apis") {
            View::disable();
        }
    }

    public function beforeSendResponse(Event $event, PhApp $application, Response $res)
    {
        // Session::destroy();
    }

}