<?php
namespace LightCloud\Com\Protos\Uc\Enums;
use \PhalconPlus\Enum\AbstractEnum;

class UserStatus extends AbstractEnum
{
    const __default = self::NORMAL;

    const NORMAL = 0;
    const INIT = 1;
    const NEED_VALID = 2;
    const BLOCK = 3;
    const DELETED = 4;
}