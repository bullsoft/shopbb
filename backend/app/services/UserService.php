<?php
namespace ShBB\Backend\Services;
use PhalconPlus\Base\SimpleRequest as SimpleRequest;

use ShBB\Backend\Models;
use ShBB\Backend\Daos;

use Common\Protos\ProtoLoginInfo;
use Common\Protos\ProtoRegInfo;
use Common\Protos\Exception\SystemBusyException;
use Common\Protos\Exception\UserNotExistsException;
use Common\Protos\Exception\UserAlreadyExistsException;

class UserService extends \PhalconPlus\Base\Service
{
    public function demo(SimpleRequest $request)
    {
    	return $request->toArray();
    }

    public function getUserById(SimpleRequest $request)
    {
        $userId = $request->getParam(0);
        $userInfo = Models\Shbb\UserInfoModel::findFirstById($userId);
        if($userInfo != false) {
            return $userInfo->toProtoBuffer([
                "id",
                "mobile",
                "email",
                "isEmailVerified",
                "nickname",
                "points",
                "inviteUserId",
                "inviteCode",
                "status",
            ]);
        }
        throw new \Exception("User (userId={$userId}) not exists");
    }

    public function passwdMatch(ProtoLoginInfo $loginInfo)
    {
        $mobile = $loginInfo->getMobile();
        $passwd = $loginInfo->getPasswd();

        $userInfo = Daos\UserDao::exists("mobile", $mobile);

        if(empty($userInfo)) {
            throw new UserNotExistsException(["login failed", $mobile]);
        }

        $hashPasswd = hash("sha256", hex2bin($userInfo->salt) . $passwd);
        if($hashPasswd != $userInfo->passwd) {
            throw new \Exception("密码不匹配");
        }

        return $userInfo->toProtoBuffer([
            "id",
            "mobile",
            "email",
            "isEmailVerified",
            "nickname",
            "points",
            "inviteUserId",
            "inviteCode",
            "status",
        ]);
    }

    public function create(ProtoRegInfo $regInfo)
    {
        // UserInfoModel
        $userInfo = new Models\UserInfo();
        $userInfo->mobile = $regInfo->getMobile();
        // 手机号是否已经被占用
        if(Daos\UserDao::exists("mobile", $regInfo->getMobile()) != false) {
            throw new UserAlreadyExists(["user mobile alreay exists", $regInfo->getMobile()], $this->logger);
        }

        // 生成安全密码
        $salt = random_bytes(32);
        $userInfo->salt = bin2hex($salt);
        $passwd = hash("sha256", $salt.$regInfo->getPasswd());
        $userInfo->passwd = $passwd;

        // 注册设备及来源
        $userInfo->deviceId = 1;
        $userInfo->refer = "HOME";

        // 生成用户邀请码, 把手机号转成36进制([0-9][A-Z])
        $userInfo->inviteCode = strtoupper(base_convert($regInfo->getMobile(), 10, 36));

        // 通过手机验证码,合法用户
        $userInfo->status = EnumUserStatus::NORMAL;
        $userInfo->email = $regInfo->getEmail();
        $userInfo->isEmailVerified = 0;
        // 邮箱是否已被占用
        if(Daos\UserDao::exists("email", $regInfo->getEmail()) != false) {
            throw new UserAlreadyExists(["user email alreay exists", $regInfo->getEmail()], $this->logger);
        }

        // 处理邀请人信息
        $userInfo->inviteUserId = self::DEFAULT_INVITE_UID;
        if(!$regInfo->isNull("inviteCode")) {
            $inviteUser = Daos\UserDao::exists("inviteCode", $regInfo->getInviteCode());
            if($inviteUser != false) {
                $userInfo->inviteUserId = $inviteUser->id;
            }
        }

        if($userInfo->save() == false) {
            throw new SystemBusy(["failed to create user, userInfo: ", $userInfo->toArray()], $this->logger);
        }

        return $userInfo->toProtoBuffer([
            "id",
        ]);
    }
}
