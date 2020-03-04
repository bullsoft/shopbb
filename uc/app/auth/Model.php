<?php
namespace LightCloud\Uc\Auth;
use PhalconPlus\Auth\Model as AuthModel;
use LightCloud\Uc\Models\UserModel;

class Model extends AuthModel
{
    public function __construct(UserModel $user)
    {
        parent::__construct($user);
        $this->policies = [
            UserModel::class => Policies\User::class,
        ];
    }

}