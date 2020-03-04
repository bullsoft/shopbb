<?php
namespace Common\Protos\WealthTech\Enums;

use \PhalconPlus\Enum\AbstractEnum;

//XCrm系统中预约状态
class PermissionCode extends AbstractEnum
{
    const BOOKING = 1; //预约权限

    private static $detail = [
        self::BOOKING => '预约权限',
    ];

    public static function getTypeName($type)
    {
        return isset(self::$detail[$type]) ? self::$detail[$type]:'';
    }

    public static function getTypeMap()
    {
        return self::$detail;
    }
}
