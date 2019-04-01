<?php
namespace LightCloud\Uc\Controllers;

class UserController extends BaseController
{
    /**
     * 模板使用示例
     */
    public function loginAction()
    {
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
    }

    public function registerAction()
    {
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
    }
    
    public function forgotPasswordAction()
    {
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
    }

    public function resetPasswordAction()
    {
        
    }

    public function indexAction()
    {

    }
}