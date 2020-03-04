<?php
namespace LightCloud\Uc\Auth;

use Phalcon\Mvc\Model;
use PhalconPlus\Contracts\Auth\{
    UserProvider,
    Access\Authorizable
};
use LightCloud\Uc\Models\UserModel;
use LightCloud\Uc\Auth\Model as AuthModel;
use Ph\{
    Config, Session, Acl, Di, Security,
};

use LightCloud\Com\Protos\Uc\Exceptions\UserNotExistsException;

class User extends UserModel implements UserProvider, Authorizable
{
    const SESSNAME_PATH = "application.session.cookie_name";

    public function initialize()
    {
        parent::initialize();
    }

    public function getById(int $userId)
    {
        if ($userId == 0) {
            return User::guest();
        }
        return User::findFirstById($userId);
    }

    public function getRole()
    {
        if($this->getIdValue() == 0) {
            $defaultRole = 'Guests';
        } else {
            $defaultRole = 'Customers';
        }
        return $this->role ?? $defaultRole;
    }

    public function hasAccess(string $roleName)
    {
        return $this->getRole() == $roleName;
    }

    public function isSuper()
    {
        return $this->getRole() == 'Super';
    }

    public function isGuest()
    {
        return $this->getRole() == 'Guests';
    }

    public function isAdmin()
    {
        return $this->getRole() == 'Admin';
    }

    public static function guest()
    {
        $guest = new User();
        $guest->setIdValue(0);
        return $guest;
    }

    public static function loginByCredentials(array $credentials)
    {
        $cookieName = Config::path(User::SESSNAME_PATH);

        $user = User::getByCredentials($credentials);
        if (empty($user)) {
            throw new UserNotExistsException(["用户不存在", $credentials['username']]);
        } 
        if(User::validateCredentials($user, $credentials)) {
            Session::set($cookieName, $user->id);
            return $user;
        }
        // To protect against timing attacks.
        Security::hash(rand());
        throw new UserNotExistsException(["密码不匹配"]);
    }

    public static function getByCredentials(array $credentials) : User
    {
        $user = User::findFirst([
            "username = :m: OR mobile = :m:",
            "bind" => [
                "m" => $credentials['username']
            ]
        ]);
        return $user;
    }

    public static function hashPassword($rawPasswd) : string
    {
        return Security::hash($rawPasswd);
    }

    public static function validateCredentials(Model $user, array $credentials) : bool
    {
        return Security::checkHash($credentials['passwd'], $user->passwd);
    }

    public static function tryToLogin() : bool
    {
        $cookieName = Config::path(User::SESSNAME_PATH);
        if(Session::has($cookieName)) {
            $userId = intval(Session::get($cookieName));
        } else {
            $userId = 0;
        }
        $user = User::newInstance()->getById($userId);
        Di::setShared("user", $user);
        if($user->isGuest()) {
            Session::remove($cookieName);
            return false;
        }
        return true;
    }

    public static function tryToLoginWithToken() : bool
    {
        return false;
        // User::getInstance()->getByToken();
    }

    public function can(string $ability, $param) : bool
    {
        if(is_string($param)) {
            return Acl::isAllowed($this->getRole(), $param, $ability);
        } elseif (is_object($param) && $param instanceof \Phalcon\Mvc\Model) { 
            $authModel = new AuthModel($this);
            $policy = $authModel->getPolicy($param);
            return call_user_func_array([$policy, $ability], [$this, $param]);
        }
        return false;
    }

    public function getIdName() : string
    {
        return 'id';
    }

    public function getIdValue()
    {
        $property = $this->getIdName();
        return $this->{$property} ?? 0;
    }

    public function setIdValue($val) : UserProvider
    {
        $property = $this->getIdName();
        $this->{$property} = $val;
        return $this;
    }
}