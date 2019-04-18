<?php
namespace LightCloud\Uc\Plugins;

use Phalcon\Events\Event;
use Phalcon\Mvc\User\Plugin;
use Phalcon\Mvc\Dispatcher;
use PhalconPlus\Base\SimpleRequest;
use LightCloud\Com\Protos\Uc\Exceptions\NeedLoginException;
use LightCloud\Uc\Models\UserModel;

class DispatcherInterceptor extends Plugin
{
    protected $di;
    protected $eventManager;

    public function __construct($di, $evtManager)
    {
        $this->di = $di;
        $this->eventManager = $evtManager;
    }

    public function beforeDispatch(\Phalcon\Events\Event $event, \Phalcon\Mvc\Dispatcher $dispatcher)
    {
        $controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();

        if(isset($_POST['sessionId'])) {
            $this->session->setId($_POST['sessionId']);
        }

        return true;
    }

    public function beforeExecuteRoute(\Phalcon\Events\Event $event, \Phalcon\Mvc\Dispatcher $dispatcher)
    {
        $annotations = new \Phalcon\Annotations\Adapter\Memory();
        $method = $dispatcher->getActiveMethod();
        $anno = $annotations->getMethod(get_class($dispatcher->getActiveController()), $method);

        // 禁止模板
        if($anno->has('disableView') || $anno->has('api')) {
            $this->view->disable();
        }
        
        if($anno->has('api')) {
            $dispatcher->setParam("ApiException", true);
            $this->view->disable();
        }

        if(rtrim($dispatcher->getNamespaceName(), "\\") == "LightCloud\Uc\Controllers\\Apis") {
            $this->view->disable();
            $dispatcher->setParam("ApiException", true);
        }

        // 不允许匿名
        if($anno->has('disableGuest')) {
            if (!$this->session->has('identity')) {
                if (!$anno->has('api')) {
                    // HTTP跳转登录
                    $response = new \Phalcon\Http\Response();
                    $response->redirect("user/login?from=".urlencode($this->request->getURI()));
                    $dispatcher->setReturnedValue($response);
                    return false;
                } else {
                    throw new NeedLoginException(["user need login to access this resource"]);
                }
            }
        }

        if($this->session->has('identity')) {
            $userId = intval($this->session->get('identity'));
            $user = UserModel::findFirst($userId);
            if($user == false) {
                $this->session->remove('identity');
                throw new NeedLoginException(["user need login to access this resource"]);
                return false;
            } else {
                $response = $user->toProtoBuffer();
                $this->di->setShared("user", function () use ($response) {
                    return $response;
                });
            }
        }

        return true;
    }

    public function afterExecuteRoute(\Phalcon\Events\Event $event, \Phalcon\Mvc\Dispatcher $dispatcher)
    {
        $returnValue = $dispatcher->getReturnedValue();
        
        if(!is_array($returnValue) && !is_object($returnValue)) {
            return true;
        }
        
        if (is_object($returnValue)) { 
            if($returnValue instanceof \Phalcon\Http\Response) {
                $dispatcher->setReturnedValue($returnValue);
                return true;
            } else if(method_exists($returnValue, "getResult")) {
                $returnValue = $returnValue->getResult();
            } else if(method_exists($returnValue, "toArray")) {
                $returnValue = $returnValue->toArray();
            }
        }
        
        $return = array(
            'errorCode' => 0,
            'data' => $returnValue,
            'errorMsg' => '',
        );
        $return["sessionId"] = $this->session->getId();
        $response = new \Phalcon\Http\Response();
        $response->setHeader('Content-Type', 'application/json');
        $response->setJsonContent($return, \JSON_UNESCAPED_UNICODE);
        $dispatcher->setReturnedValue($response);
        
        return true;
    }
}
