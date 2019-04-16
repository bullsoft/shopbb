<?php
namespace Bull\MainSite\Controllers;

class ErrorController extends BaseController
{
    public function show404Action()
    {
    }

    public function showUnknownAction()
    {
        $e = $this->dispatcher->getParams()[0];
        $this->view->setVar("err", $e);
    }
}