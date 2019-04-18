<?php
namespace LightCloud\Uc\Controllers;
use LightCloud\Com\Protos\Uc\Schemas;
use LightCloud\Uc\Entities\UserEntity;
use Gregwar\Captcha\CaptchaBuilder;
use Hashids\Hashids;
use function GuzzleHttp\json_encode;
use function GuzzleHttp\json_decode;

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
                $regInfo = Schemas\RegInfo::newInstance((object) $this->request->getPost());
            } catch(\Exception $e) {
                $this->view->setVar("pageException", $e);
                return;
            }
            $user = UserEntity::passwdMatch($regInfo->getUsername(), $regInfo->getPasswd());
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
        $this->view->setVar("regStatus", false);
        if($this->request->isPost()) {
            try {
                \PhalconPlus\Assert\Assertion::notEmpty($this->request->getPost("firstName"), "名字不能为空");
                \PhalconPlus\Assert\Assertion::notEmpty($this->request->getPost("email"), "邮件地址不能为空");
                \PhalconPlus\Assert\Assertion::eq($this->request->getPost("passwd"), $this->request->getPost("passwd1"), "两次输入的密码不一致");
                // UserName is required, use email here
                $_POST['username'] = $this->request->getPost("email");
                // get name from lastName + firstName
                $lastName = $this->request->getPost("lastName")?$this->request->getPost("lastName")." " : "";
                $firstName = $this->request->getPost("firstName");

                $regInfo = Schemas\RegInfo::newInstance((object) $this->request->getPost());
                if(empty($regInfo->getNickname())) {
                    $regInfo->setNickname($lastName.$firstName);
                }
                $result = UserEntity::createOne($regInfo);
                $this->session->set('identity', $result->id);
                $this->view->setVar("regStatus",  true);
                $this->view->setVar("email", $regInfo->getEMail());
                // empty POST data
                $_POST = [];
                $hashids = new Hashids();
                $rand = str_replace(".", "-", uniqid("lightcloud-", true));
                $this->redis->setEx($rand, 3600, json_encode([$regInfo->getEmail(), $result->id]));

                // SendEmail
                $sendResult = $this->mailClient->sendEmailWithTemplate(
                    "no-reply@lightcloud.org",
                    $regInfo->getEMail(),
                    "11196862",
                    [
                        "product_name" => "轻量云用户中心", 
                        "name" => $regInfo->getNickname(),
                        "action_url" => $this->url->get("user/activate", ["rand" => $rand], true),
                        "login_url" => $this->url->get("user/login", null ,true),
                        "username" => $regInfo->getUsername(),
                        "company_name" => "布尔软件",
                        "company_address" => "北京市朝阳区霄云路"
                    ],
                    true,
                    "welcome_to_lightcloud"
                );

            } catch(\Exception $e) {
                $this->view->setVar("pageException", $e);
                return;
            }  
        }

    }

    public function activateAction()
    {
        $randStr = $this->request->getQuery("rand");
        \PhalconPlus\Assert\Assertion::notEmpty($randStr, "非法访问");
        $cacheInfo = $this->redis->get($randStr);
        $info = json_decode($cacheInfo, true);
        $result = UserEntity::activateThroughMail($info[0], $info[1]);
        if(!$result) {
            echo "激活失败，请联系我们";
            exit;
        }
        $response = new \Phalcon\Http\Response();
        $response->redirect('/');
        return $response;
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