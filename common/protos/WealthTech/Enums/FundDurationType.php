<?php
namespace Common\Protos\WealthTech\Enums;
use \PhalconPlus\Enum\AbstractEnum;


//基金期限类型
class FundDurationType extends AbstractEnum
{
    const FIXED_DURATION = 1; //固定
    const FIXED_FLOAT_DURATION = 2; //固定+浮动

    private static $detail = [
        self::FIXED_DURATION => '固定',
        self::FIXED_FLOAT_DURATION => '固定+浮动',
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
