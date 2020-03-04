<?php
namespace Common\Protos\WealthTech\Enums;
use \PhalconPlus\Enum\AbstractEnum;

//XCrm系统中证件类型
class IdType extends AbstractEnum
{
    const MAINLAND_ID_CARD = '大陆身份证';
    const HK_ID_CARD = '香港身份证';
    const MAINLAND_PASSPORT = '大陆护照';
    const HK_PASSPORT = '香港护照';

    private static $detail = [
        self::MAINLAND_ID_CARD,
        self::MAINLAND_PASSPORT,
        self::HK_ID_CARD,
        self::HK_PASSPORT,
        ];

    public static function getTypeMap()
    {
        return self::$detail;
    }
}
