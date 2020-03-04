<?php
namespace Common\Protos\WealthTech\Enums;
use \PhalconPlus\Enum\AbstractEnum;

class DepUserStatus extends AbstractEnum
{

    const PENDING_REVIEW = 1; //待审核
    const REVIEWED = 2; //已审核

    private static $map = [
        self::PENDING_REVIEW => '待审核',
        self::REVIEWED => '已审核',
    ];

    public static function getShow($status)
    {
         return isset(self::$map[$status]) ? self::$map[$status]:'';
    }

}
