<?php
namespace LightCloud\Uc\Controllers;
use Ph\{
    Router,
};
class ErrorController extends BaseController
{
    public function initialize()
    {
        // $this->view->setVar("showSider", false);
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
    }

    public function show404Action()
    {
        // $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
        $this->view->setVar("notFoundUrl", Router::getRewriteUri());
    }

    public function show403Action()
    {
        // $this->view->setVar("showSider", false);
        echo "<h1>403, Forbidden!</h1>";
        echo "很抱歉，您没有权限访问该资源！";
    }

    public function showUnknownAction()
    {
        $e = $this->dispatcher->getParams()[0];
        echo "<h1>Whoops!</h1>";
        echo "<p>ErrorCode: "    . $e->getCode() . "</p>";
        echo "<p>ErrorMessage: " . $e->getMessage() . "</p>";   
        echo "<hr />Trace: <p>"  . nl2br($e->getTraceAsString()) . "</p>";
    }
}