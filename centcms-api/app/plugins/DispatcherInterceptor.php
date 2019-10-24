<?php
namespace LightCloud\CentCMS\Api\Plugins;

use Phalcon\Events\Event;
use Phalcon\Mvc\Dispatcher;
use PhalconPlus\Base\SimpleRequest;

class DispatcherInterceptor extends \Phalcon\Di\Injectable
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
        $response->setContentType("application/json", "UTF-8");
        $response->setJsonContent($return, \JSON_UNESCAPED_UNICODE);
        $dispatcher->setReturnedValue($response);
        return true;
    }
}
