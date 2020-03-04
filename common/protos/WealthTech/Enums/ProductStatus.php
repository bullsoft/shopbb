<?php
namespace Common\Protos\WealthTech\Enums;
use \PhalconPlus\Enum\AbstractEnum;

class ProductStatus extends AbstractEnum
{
    const ON_SHELVES = 0; //已上架
    const RAISED_SUCCESS = 1; //募集完成
    const RAISED_FAILED = 2;//募集失败

    private static $detail = [
        self::ON_SHELVES => '已上架',
        self::RAISED_SUCCESS => '募集完成',
        self::RAISED_FAILED => '募集失败',
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
