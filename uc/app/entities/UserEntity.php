<?php
namespace LightCloud\Uc\Entities;

use League\OAuth2\Server\Entities\UserEntityInterface;
use LightCloud\Uc\Models\UserModel;
use LightCloud\Com\Protos\Uc\Exceptions\UserNotExistsException;
use LightCloud\Com\Protos\Uc\Schemas\RegInfo;
use LightCloud\Com\Protos\Uc\Enums\UserStatus;
use PhalconPlus\Com\Protos\Exceptions\SystemBusyException;
use LightCloud\Com\Protos\Uc\Exceptions\UserAlreadyExistsException;


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

        $hashPasswd = hash("sha256", hex2bin($userInfo->salt) . $passwd);
        if ($hashPasswd != $userInfo->passwd) {
            throw new UserNotExistsException(["password not matched", $username]);
        }

        return $userInfo;
    }

    public static function createOne(RegInfo $regInfo)
    {
        // UserModel
        $user = new UserModel();
        if($regInfo->getMobile()) {
            $user->mobile = $regInfo->getMobile();
        }

        $user->username = $regInfo->getUsername();
        $user->setUniqueKeys(["username"]);

        // 是否已经被占用
        if ($user->exists() != false) {
            throw new UserAlreadyExistsException(["username alreay exists", $regInfo->getUsername()]);
        }

        // 生成安全密码
        $salt = random_bytes(32);
        $user->salt = bin2hex($salt);
        $passwd = hash("sha256", $salt . $regInfo->getPasswd());
        $user->passwd = $passwd;

        // 默认合法用户
        $user->status = UserStatus::NORMAL;


        if ($user->save() == false) {
            throw new SystemBusyException(["failed to create user, userInfo: ", $user->toArray()]);
        }
        
        return $user->toProtoBuffer([
            "id",
        ]);
    }
}
