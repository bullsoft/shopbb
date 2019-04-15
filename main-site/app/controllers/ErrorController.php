<?php
namespace Bull\MainSite\Controllers;

class ErrorController extends BaseController
{
    public function show404Action()
    {
        echo "<h1>404, Not Found!</h1>";
        echo "<p>The URI you requested is not exist: <i>" . $_GET["_url"] . "</i>"; 
    }

    public function showUnknownAction()
    {
        $e = $this->dispatcher->getParams()[0];
        $this->view->setVar("err", $e);
    }
}