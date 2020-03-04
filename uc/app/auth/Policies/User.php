<?php
namespace LightCloud\Uc\Auth\Policies;

use PhalconPlus\Auth\Policy;
use Phalcon\Mvc\Model;
use PhalconPlus\Contracts\Auth\UserProvider;

class User extends Policy
{
    public function view(UserProvider $user, Model $model) : bool
    {
        // return true;
        return $user->id == $model->id;
    }
}