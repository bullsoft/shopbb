<?php
namespace LightCloud\Uc\Controllers;

use PhalconPlus\Base\SimpleRequest as SimpleRequest;
use function LightCloud\Uc\getSiteConf;
use LightCloud\Uc\Auth\User;

use Ph\{
    Acl,
};
class BaseController extends \Phalcon\Mvc\Controller
{
    protected $controller;
    protected $action;
    protected $mailer;
    public $user = null;

    public function initialize()
    {
        $this->controller = $whichController = $this->dispatcher->getControllerName();
        $this->action = $whichAction = $this->dispatcher->getActionName();
        $this->mailer = new \LightCloud\Uc\Plugins\SendMail();
        \LightCloud\Uc\Plugins\Util::load();

        $whichTitle = "页面标题(" . $whichController . ":" . $whichAction . ")";
        $title = getSiteConf()->titles->get($whichController) ?
                 getSiteConf()->titles->get($whichController)->get($whichAction, $whichTitle) : $whichTitle;

        $this->view->setVar("whichController", $whichController);
        $this->view->setVar("whichAction", $whichAction);
        $this->view->setVar("pageException", null);
        $this->view->setVar("showSider", true);
        $this->view->setVar("user", $this->user);
        $this->view->setVar("title", $title);
        $this->view->setVar("headDesc",     getSiteConf()->get("headDesc", "网站描述"));
        $this->view->setVar("headKeywords", getSiteConf()->get("headKeywords", "网站关键词"));
        $this->view->setVar("tpl",          getSiteConf()->get("template", "default"));
        $this->view->setVar("ver", date("YmdHis").rand(100000, 999999));

    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function authroize()
    {
        $controller = Dispatcher::getControllerClass();
        $method = Dispatcher::getActiveMethod();
        return Acl::isAllowed($this->user->getRole(), $controller, $method);
    }

    protected function formValid(\Phalcon\Forms\Form $form, array $input)
    {
        if(!$form->isValid($input)) {
            $details = [];
            foreach ($form->getMessages() as $val) {
                $details[$val->getField()][] = $val->getMessage();
            }
            $msg = "{$this->controller}:{$this->action} form failed to validate";
            throw new \PhalconPlus\Com\Protos\Exception\FormInputInvalid([$msg, json_encode($details, \JSON_UNESCAPED_UNICODE)], $this->logger);
        }
        return true;
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