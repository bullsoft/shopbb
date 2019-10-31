<?php
namespace LightCloud\Uc\Controllers;

class ErrorController extends BaseController
{
    public function show404Action()
    {
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
        $this->view->setVar("notFoundUrl", $_GET['_url']);
    }

    public function showUnknownAction()
    {
        $this->view->setVar("showSider", false);
        $e = $this->dispatcher->getParams()[0];
        echo "<h1>Whoops!</h1>";
        echo "<p>ErrorCode: " . $e->getCode() . "</p>";
        echo "<p>ErrorMessage: " . $e->getMessage() . "</p>";   
        echo "<hr />Trace: <p>" . nl2br($e->getTraceAsString()) . "</p>";
    }
}