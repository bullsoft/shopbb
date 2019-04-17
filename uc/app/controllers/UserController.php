<?php
namespace LightCloud\Uc\Controllers;
use LightCloud\Com\Protos\Uc\Schemas;
use LightCloud\Uc\Entities\UserEntity;
use Gregwar\Captcha\CaptchaBuilder;

class UserController extends BaseController
{
    /**
     * 模板使用示例
     */
    public function loginAction()
    {
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
        if($this->request->isGet()) {
            if($this->session->get('identity') > 0) {
                $response = new \Phalcon\Http\Response();
                $redirectUrl = $this->request->getQuery("from", "string", "/");
                $response->redirect($redirectUrl);
                return $response;
            }
        }
        if($this->request->isPost()) {
            try {
                $a = Schemas\RegInfo::newInstance((object) $this->request->getPost());
            } catch(\Exception $e) {
                $this->view->setVar("pageException", $e);
                return;
            }
            $user = UserEntity::passwdMatch($a->getUsername(), $a->getPasswd());
            $this->session->set('identity', $user->id);
            $response = new \Phalcon\Http\Response();
            $redirectUrl = $this->request->getQuery("from", "string", "/");
            $response->redirect($redirectUrl);
            return $response;
            
        }
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