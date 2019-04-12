<?php
namespace Bull\MainSite\Controllers;

use PhalconPlus\Base\SimpleRequest as SimpleRequest;
use function LightCloud\Uc\getSiteConf;

class BaseController extends \Phalcon\Mvc\Controller
{
    protected $controller;
    protected $action;

    public function initialize()
    {
        $this->controller = $whichController = $this->dispatcher->getControllerName();
        $this->action = $whichAction = $this->dispatcher->getActionName();

        $whichTitle = "网站标题(" . $whichController . ":" . $whichAction . ")";
        // $title = getSiteConf()->titles->get($whichController) ?
        //          getSiteConf()->titles->get($whichController)->get($whichAction, $whichTitle) : $whichTitle;


        $this->view->setVar("whichController", $whichController);
        $this->view->setVar("whichAction", $whichAction);
        $this->view->setVar("pageException", null);
        //$this->view->setVar("title", $title);
        // $this->view->setVar("headDesc",     getSiteConf()->get("headDesc", "网站描述"));
        // $this->view->setVar("headKeywords", getSiteConf()->get("headKeywords", "网站关键词"));
        // $this->view->setVar("tpl",          getSiteConf()->get("template", "default"));
        $this->view->setVar("ver", date("YmdHis").rand(100000, 999999));
    }

    /**
     * @param string $name
     * @param string $method
     * @param array|object<\PhalconPlus\Base\SimpleRequest> $args 
     */
    protected function rpc($name, $method, $args=[])
    {
        if(is_object($args) && $args instanceof SimpleRequest) {
            $request = $args;
        } elseif(is_array($args)) {
            $request = new SimpleRequest();
            if(!empty($args)) {
                $request->setParams($args);
            }
        } else {
            throw new \RuntimeException("The 3rd param of RPC should be either an array or an instance of <SimpleRequest>");
        }

        $name = "\\LightCloud\\Uc\\Backend\\" . $name;
        return $this->rpc->callByObject(array(
            "service" => $name,
            "method" => $method,
            "args"   => $request,
            "logId"  => $this->logger->getFormatter()->uid,
        ));
    }
}