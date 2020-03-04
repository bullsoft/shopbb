<?php
namespace LightCloud\Uc\Events;
use Phalcon\Events\Event;
use Phalcon\Mvc\DispatcherInterface;
use Phalcon\Mvc\Dispatcher;
use LightCloud\Uc\Auth\User;
use Ph\{
    EventsManager,
    Dispatcher as PhDispatcher,
    Di, Acl, Response, View, Session,
};
use PhalconPlus\Contracts\{
    EventAttachable,
    Auth\Access\DispatchEvent,
};

class Dispatch implements EventAttachable, DispatchEvent
{
    public function __construct()
    {
        PhDispatcher::setEventsManager(Di::get('eventsManager'));
    }

    public function attach($param = null)
    {
        EventsManager::attach("dispatch", $this);
    }

    public function beforeDispatchLoop(Event $event, DispatcherInterface $dispatcher)
    {
        // $controller = $dispatcher->getControllerName();
        // $action = $dispatcher->getActionName();

        return true;
    }

    public function beforeExecuteRoute(Event $event, DispatcherInterface $dispatcher) : bool
    {
        // API 直接放行
        if(rtrim($dispatcher->getNamespaceName(), "\\") == "LightCloud\\Uc\\Controllers\\Apis") {
            return true;
        }

        $controller = $dispatcher->getActiveController();
        $ctrClassName = $dispatcher->getControllerClass();
        $method = $dispatcher->getActiveMethod();

        $user = Di::has('user') ? Di::get('user') : User::guest();
        if(!Acl::isAllowed($user->getRole(), $ctrClassName, $method)) {
            if($user->isGuest()) {
                Response::redirect('/user/login');
            } else {
                Response::redirect('/error/show403');
            }
            return false;
        }

        if(method_exists($controller, 'setUser')) {
            $controller->setUser($user);
        } 

        return true;
    }

    public function afterExecuteRoute(Event $event, DispatcherInterface $dispatcher)
    {
        $returnValue = $dispatcher->getReturnedValue();
        if(is_object($returnValue) && ($returnValue instanceof \Phalcon\Http\Response)) {
            return true;
        }
        if(!is_array($returnValue) && !is_object($returnValue)) {
            return true;
        }
        if (is_object($returnValue)) {
            if(method_exists($returnValue, "getResult")) {
                $returnValue = $returnValue->getResult();
            } else if(method_exists($returnValue, "toArray")) {
                $returnValue = $returnValue->toArray();
            }
        } 
        $return = [
            'errorCode' => 0,
            'data' => $returnValue,
            'errorMsg' => '',
            'sessionId' => Session::getId(),
        ];
        Response::setContentType("application/json", "UTF-8");
        Response::setJsonContent($return, \JSON_UNESCAPED_UNICODE);
        $dispatcher->setReturnedValue(Di::get('response'));
        return true;
    }

    public function beforeForward(Event $event, DispatcherInterface $dispatcher, array $forward)
    {
        $dispatcher->setNamespaceName("LightCloud\\Uc\\Controllers\\");
    }

    public function beforeException(Event $event, DispatcherInterface $dispatcher, \Exception $exception)
    {
        if(rtrim($dispatcher->getNamespaceName(), "\\") == "LightCloud\\Uc\\Controllers\\Apis") {
            throw $exception;
        }
        // if($version < 4) {
        //     $exceptionClass = \Phalcon\Mvc\Dispatcher::class;
        // } else {
        //     $exceptionClass = \Phalcon\Dispatcher\Exception::class;
        // }
        switch ($exception->getCode()) {
            case Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
            case Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
                $dispatcher->forward(array(
                    'controller' => 'error',
                    'action'     => 'show404'
                ));
                return false;
            default:
                $dispatcher->forward(array(
                    'controller' => 'error',
                    'action'     => 'showUnknown',
                    "params"     => [$exception],
                ));
                return false;
        }
    }
}