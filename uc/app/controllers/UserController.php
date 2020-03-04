<?php
namespace LightCloud\Uc\Controllers;

use LightCloud\Com\Protos\Uc\Schemas;
use LightCloud\Uc\Entities\UserEntity;
use Gregwar\Captcha\CaptchaBuilder;
use Hashids\Hashids;
use function GuzzleHttp\json_encode;
use function GuzzleHttp\json_decode;
use \PhalconPlus\Assert\Assertion;
use Ph\{
    Response, Request, Di, App, Redis,
    Log, FlashSession, Session, User,
};

class UserController extends BaseController
{
    public function initialize()
    {
        parent::initialize();
        $this->view->setVar("showSider", false);
    }

    /**
     * 模板使用示例
     */
    public function loginAction()
    {
        Log::debug("123456");
        // error_log(Request::getMethod());
        // error_log(var_export($_GET));
        // error_log(var_export($_COOKIE, true));
        // error_log(var_export(Request::getPost(), true));
        // error_log(var_export($_POST, true));
        // error_log(var_export($_GET, true));
        // error_log(var_export(Request::getUploadedFiles(), true));
        // error_log('phrase::' . Session::getId());

        if (Request::isGet()) {
            if (!User::isGuest()) {
                $redirectUrl = Request::getQuery("from", "string", "/");
                Response::redirect(\Phalcon\Text::reduceSlashes($redirectUrl));
                return ;
            }
        }
        if (Request::isPost()) {
            // error_log(var_export(Request::getPost(), true));
            $captchaKey = 'phrase::' . session_id();
            // error_log($captchaKey);
            // error_log(Redis::get($captchaKey));

            try {
                $email = Request::getPost("email");
                Assertion::notEmpty("email", "请输入邮箱");
                Assertion::eq(
                    strtolower(Redis::get($captchaKey)),
                    strtolower(Request::getPost("captcha")),
                    "验证码错误"
                );
                Redis::delete($captchaKey);
                $_POST['username'] = $email;
                $regInfo = Schemas\RegInfo::newInstance((object) Request::getPost());
                $user = UserEntity::passwdMatch($regInfo->getUsername(), $regInfo->getPasswd());
                Session::set('identity', $user->id);
            } catch (\Exception $e) {
                FlashSession::error($e->getMessage());
                return;
            }
            $redirectUrl = Request::getQuery("from", "string", "/");
            Response::redirect(\Phalcon\Text::reduceSlashes($redirectUrl));
            return ;
        }
    }

    public function registerAction()
    {
        $this->view->setVar("regStatus", false);
        if ($this->request->isPost()) {
            try {
                Assertion::notEmpty($this->request->getPost("firstName"), "名字不能为空");
                Assertion::notEmpty($this->request->getPost("email"), "邮件地址不能为空");
                Assertion::eq($this->request->getPost("passwd"), $this->request->getPost("passwd1"), "两次输入的密码不一致");
                // UserName is required, use email here
                $_POST['username'] = $this->request->getPost("email");
                // Get name from lastName + firstName
                $lastName = $this->request->getPost("lastName") ? $this->request->getPost("lastName") . " " : "";
                $firstName = $this->request->getPost("firstName");

                $regInfo = Schemas\RegInfo::newInstance((object)$this->request->getPost());
                if (empty($regInfo->getNickname())) {
                    $regInfo->setNickname($lastName . $firstName);
                }
                $result = UserEntity::createOne($regInfo);
                $this->session->set('identity', $result->id);
                $this->di->setShared('user', $result);
                $this->view->setVar("regStatus",  true);
                $this->view->setVar("email", $regInfo->getEMail());

                // Empty POST data
                $_POST = [];
                $rand = \LightCloud\Uc\Plugins\getRandomCode();
                $this->redis->setEx($rand, 3600, json_encode([$result->id, $regInfo->getEmail()]));

                // SendEmail
                $sendResult = $this->mailer->welcome2Lightcloud($regInfo->getEmail(), [
                    "name" => $regInfo->getNickname(),
                    "action_url" => $this->url->get("user/activate", ["rand" => $rand, "from" => "email"], true),
                    "username" => $regInfo->getUsername(),
                ]);
            } catch (\Exception $e) {
                $this->view->setVar("pageException", $e);
                return;
            }
        }
    }

    /**
     * 通过邮件激活账号
     */
    public function activateAction()
    {
        $randStr = $this->request->getQuery("rand");
        Assertion::notEmpty($randStr, "非法访问");
        $cacheInfo = $this->redis->get($randStr);
        $info = json_decode($cacheInfo, true);
        $result = UserEntity::activateThroughMail($info[0], $info[1]);
        if (!$result) {
            echo "激活失败，请联系我们";
            exit;
        }
        $this->redis->delete($randStr);
        $response = new \Phalcon\Http\Response();
        $response->redirect('/');
        return $response;
    }

    public function logoutAction()
    {
        $this->session->destroy();
        Response::redirect('/user/login');
        // return Response::sharedInstance();
        return Di::get('response');
    }

    public function forgotPasswordAction()
    {
        $this->view->setVar("resetPasswdStatus", false);
        if ($this->request->isPost()) {
            $user = UserEntity::findFirstByEmail($this->request->getPost('email'));
            if(false == $user) {
                $e = new \LightCloud\Com\Protos\Uc\Exceptions\UserNotExistsException(["email not exists", $this->request->getPost('email')]);
                $this->view->setVar('pageException', $e);
                return;
            }
            $code = \LightCloud\Uc\Plugins\getRandomCode();
            $this->redis->setEx($code, 3600, json_encode(["userId" => $user->id, "email" => $user->email]));
            $this->mailer->resetPassword($user->email, [
                "name" => $user->nickname ?: $user->username,
                "action_url" => $this->url->get("user/change-password", ["rand" => $code, "from" => "email"], true),
            ]);
            $this->view->setVar("resetPasswdStatus", true);
        }
    }

    public function changePasswordAction()
    {
        $this->view->setVar("resetPasswdStatus", false);
        $randStr = $this->request->getQuery("rand");
        Assertion::notEmpty($randStr, "非法访问");
        $cacheInfo = $this->redis->get($randStr);
        if(false === $cacheInfo) {
            echo "链接已失效，请重新发起！";
            exit;
        }
        $info = json_decode($cacheInfo, true);
        $this->view->setVar('email', $info['email']);
        $this->view->pick("user/resetPassword");
        if($this->request->isPost()) {
            try {
                Assertion::notEmpty($this->request->getPost("passwd"));
                Assertion::notEmpty($this->request->getPost("passwd1"));
                Assertion::eq($this->request->getPost("passwd"), $this->request->getPost("passwd1"), "两次输入的密码不一致");
                $data = [
                    "username" => $info['email'],
                    "passwd" => $this->request->getPost("passwd"),
                ];
                $regInfo = Schemas\RegInfo::newInstance((object) $data);
            } catch(\Exception $e) {
                $this->view->setVar("pageException", $e);
                return ;
            }
            $result = UserEntity::changePasswdThroughMail($info["userId"], $this->request->getPost("passwd"), true);
            if (!$result) {
                echo "激活失败，请联系我们";
                exit;
            }
            $this->redis->delete($randStr);
            $response = new \Phalcon\Http\Response();
            $response->redirect('user/login');
            return $response;
        }
    }

    /**
     * @disableGuest
     */
    public function resetPasswordAction()
    {
        $this->view->setVar("resetPasswdStatus", false);
        $this->view->setVar("email", $this->user->email);
        if ($this->request->isPost()) {
            try {
                Assertion::notEmpty($this->request->getPost("passwd"));
                Assertion::notEmpty($this->request->getPost("passwd1"));
                Assertion::eq($this->request->getPost("passwd"), $this->request->getPost("passwd1"), "两次输入的密码不一致");
                $data = [
                    "username" => $this->user->username,
                    "passwd" => $this->request->getPost("passwd"),
                ];
                $regInfo = Schemas\RegInfo::newInstance((object) $data);
            } catch(\Exception $e) {
                $this->view->setVar("pageException", $e);
                return ;
            }
            $code = \LightCloud\Uc\Plugins\getRandomCode();
            $newPassword = UserEntity::hashPasswd($regInfo->getPasswd(), $this->user->salt);
            $this->redis->setEx($code, 3600, json_encode(["userId" => $this->user->id, "password" => $newPassword]));
            $this->mailer->resetPassword($this->user->email, [
                "name" => $this->user->nickname ?: $this->user->username,
                "action_url" => $this->url->get("user/reset-password-verify", ["rand" => $code, "from" => "email"], true),
            ]);
            $this->view->setVar("resetPasswdStatus", true);
        }
    }

    public function resetPasswordVerifyAction()
    { 
        $randStr = $this->request->getQuery("rand");
        Assertion::notEmpty($randStr, "非法访问");
        $cacheInfo = $this->redis->get($randStr);
        if(false === $cacheInfo) {
            echo "链接已失效，请重新发起！";
            exit;
        }
        $info = json_decode($cacheInfo, true);
        $result = UserEntity::changePasswdThroughMail($info["userId"], $info["password"]);
        if (!$result) {
            echo "激活失败，请联系我们";
            exit;
        }
        $this->redis->delete($randStr);
        $response = new \Phalcon\Http\Response();
        $response->redirect('/');
        return $response;
    }

    public function indexAction()
    {
        $this->dispatcher->forward([
            "controller" => "index",
            "action" => "index"
        ]);
        return;
    }

    public function profileAction()
    {
        $this->dispatcher->forward([
            "controller" => "index",
            "action" => "index"
        ]);
        return;
    }
}
