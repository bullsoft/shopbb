<?php
namespace LightCloud\Uc\Entities;
use League\OAuth2\Server\Entities\UserEntityInterface;
use LightCloud\Uc\Models\UserModel;
use LightCloud\Com\Protos\Uc\Exceptions\UserNotExistsException;

class UserEntity extends UserModel implements UserEntityInterface
{
    /**
     * Return the user's identifier.
     *
     * @return mixed
     */
    public function getIdentifier()
    {
        return $this->id;
    }

    public static function passwdMatch($mobile, $passwd)
    {
        $userInfo = self::findFirst([
            "mobile = :m: ",
            "bind" => [
                "m" => $mobile
            ]
        ]);

        if(empty($userInfo)) {
            throw new UserNotExistsException(["mobile not exists", $mobile]);
        }

        $hashPasswd = hash("sha256", hex2bin($userInfo->salt) . $passwd);
        if($hashPasswd != $userInfo->passwd) {
            throw new UserNotExistsException(["password not matched", $mobile]);
        }

        return $userInfo;
    }
}