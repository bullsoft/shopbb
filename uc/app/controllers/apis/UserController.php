<?php
namespace LightCloud\Uc\Controllers\Apis;
use LightCloud\Com\Protos\Uc\Schemas;
use LightCloud\Uc\Entities\UserEntity;
class UserController extends \Phalcon\Mvc\Controller
{
    public function createAction()
    {
        $a = Schemas\RegInfo::newInstance((object) $this->request->getPost());
        return UserEntity::createOne($a);
    }
}