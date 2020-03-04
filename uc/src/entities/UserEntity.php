<?php
namespace LightCloud\Uc\Entities;

use League\OAuth2\Server\Entities\UserEntityInterface;
use LightCloud\Uc\Models\UserModel;
use LightCloud\Uc\Models\OauthUserScopesModel;
use LightCloud\Com\Protos\Uc\Exceptions\UserNotExistsException;
use LightCloud\Com\Protos\Uc\Schemas\RegInfo;
use LightCloud\Com\Protos\Uc\Enums\UserStatus;
use PhalconPlus\Com\Protos\Exceptions\SystemBusyException;
use LightCloud\Com\Protos\Uc\Exceptions\UserAlreadyExistsException;
use \League\OAuth2\Server\Grant\AbstractGrant;
use \PhalconPlus\Assert\Assertion;

class UserEntity extends UserModel implements UserEntityInterface
{
    const DEFAULT_INVITE_UID = 0;

    /**
     * Return the user's identifier.
     *
     * @return mixed
     */
    public function getIdentifier()
    {
        return $this->id;
    }

    public static function activateThroughMail($userId, $mail)
    {
        $user = UserEntity::findFirst([
            "id=:id: AND email=:m:",
            "bind" => [
                "id" => $userId,
                "m" => $mail,
            ]
        ]);
        if($user == false) {
            throw new UserNotExistsException(["activated failed with wrong params", $mail, $userId]);
        }
        $user->status = UserStatus::NORMAL;
        $user->isEmailVerified = 1;
        if($user->save()) {
            return true;
        }
        return false;
    }

    public static function changePasswdThroughMail($userId, $passwd, $isRaw = false)
    {
        $user = UserEntity::findFirst($userId);
        if($user == false) {
            throw new UserNotExistsException(["changePasswd failed with wrong params", $userId]);
        }
        if($isRaw === false) {
            $user->passwd = $passwd;
        } else {
            $user->passwd = self::hashPasswd($passwd, $user->salt);
        }
        
        if($user->save()) {
            return true;
        }
        return false;
    }

    public static function passwdMatch($username, $passwd)
    {
        $userInfo = UserEntity::findFirst([
            "username = :m: OR mobile = :m:",
            "bind" => [
                "m" => $username
            ]
        ]);
        if (empty($userInfo)) {
            throw new UserNotExistsException(["mobile not exists", $username]);
        }
        $hashPasswd = self::hashPasswd($passwd, $userInfo->salt);
        if ($hashPasswd != $userInfo->passwd) {
            throw new UserNotExistsException(["password not matched", $username]);
        }
        return $userInfo;
    }

    public static function hashPasswd($raw, $salt)
    {
        Assertion::notEmpty($raw);
        Assertion::notEmpty($salt);
        return hash("sha256", hex2bin($salt) . $raw);
    }

    public static function makePasswd($raw) 
    {
        $salt = random_bytes(32);
        return [
            "passwd" => hash("sha256", $salt . $raw),
            "salt" => bin2hex($salt)
        ];
    }

    public static function createOne(RegInfo $regInfo)
    {
        // UserModel
        $user = new UserModel();
        if($regInfo->getMobile()) {
            $user->mobile = $regInfo->getMobile();
            $user->setUniqueKeys(["mobile"]);
            // 是否已经被占用
            if ($user->exists() != false) {
                throw new UserAlreadyExistsException(["mobile alreay exists", $regInfo->getMobile()]);
            }
        }

        if($regInfo->getEmail()) {
            $user->email = $regInfo->getEmail();
            $user->setUniqueKeys(["email"]);
            // 是否已经被占用
            if ($user->exists() != false) {
                throw new UserAlreadyExistsException(["email alreay exists", $regInfo->getEmail()]);
            }
        }

        if($regInfo->getNickname()) {
            $user->nickname = $regInfo->getNickname();
        }

        $user->username = $regInfo->getUsername();
        if(!in_array($user->username, ["m".$user->mobile, $user->email])) {
            $user->setUniqueKeys(["username"]);
            // 是否已经被占用
            if ($user->exists() != false) {
                throw new UserAlreadyExistsException(["username alreay exists", $regInfo->getUsername()]);
            }
        }

        // 生成安全密码
        // $salt = random_bytes(32);
        // $user->salt = bin2hex($salt);
        // $passwd = hash("sha256", $salt . $regInfo->getPasswd());
        // $user->passwd = $passwd;
        $sec = self::makePasswd($regInfo->getPasswd());
        $user->salt = $sec['salt'];
        $user->passwd = $sec['passwd'];

        // 默认需要验证
        $user->status = UserStatus::NEED_VALID;
        $user->regTime = date("Y-m-d H:i:s");
        $user->inviteCode = new \Phalcon\Db\RawValue("NULL");

        if ($user->save() == false) {
            throw new SystemBusyException(["failed to create user, userInfo: ", $user->toArray()]);
        }
        
        return $user->toProtoBuffer([
            "id",
            "username",
            "nickname",
            "email",
            "status",
            "regTime"
        ]);
    }

    public static function approveScopes($userId, $clientId, $scopesStr)
    {
        \PhalconPlus\Assert\Assertion::numeric($userId);
        \PhalconPlus\Assert\Assertion::min($userId, 0);
        \PhalconPlus\Assert\Assertion::numeric($clientId);
        \PhalconPlus\Assert\Assertion::min($clientId, 0);
        \PhalconPlus\Assert\Assertion::isString($scopesStr);
        \PhalconPlus\Assert\Assertion::notEmpty($scopesStr);

        $scopes = explode(AbstractGrant::SCOPE_DELIMITER_STRING, $scopesStr);

        $unitwork = new \PhalconPlus\Db\UnitOfWork("db");
        foreach($scopes as $k => $scope) {
            $m = new OauthUserScopesModel();
            $m->setUniqueKeys(["userId", "clientId", "scope"]);
            $m->userId = $userId;
            $m->clientId = $clientId;
            $m->scope = $scope;
            if(!$m->exists()) {
                $unitwork->insert("scope_{$k}", $m);
            }
        }
        $result = $unitwork->exec();

        \PhalconPlus\Assert\Assertion::same($result, true, "用户Scope保存失败");
    }

    public static function getApprovedScopes($userId, $clientId)
    {
        $collection = OauthUserScopesModel::find([
            "userId = :uid: AND clientId = :cid:",
            "bind" => [
                "uid" => $userId,
                "cid" => $clientId,
            ]
        ]);
        $scopes = []; 
        foreach($collection as $item) {
            $scopes[] = $item->scope;
        }
        return $scopes;
    }
}
