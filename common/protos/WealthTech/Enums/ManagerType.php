<?php

namespace Common\Protos\WealthTech\Enums;

use \PhalconPlus\Enum\AbstractEnum;

class ManagerType extends AbstractEnum
{
    const __default = self::MANDATOR_MANAGER;

    const MANDATOR_MANAGER    =  1; //'受托管理';
    const SELF_MANAGER        =  2; //'自我管理';
    const CONSULTANT_MANAGER  =  3; //'顾问管理';


    private static $detail = [
        self::MANDATOR_MANAGER    => '受托管理',
        self::SELF_MANAGER        => '自我管理',
        self::CONSULTANT_MANAGER  => '顾问管理',
    ];

    public static  function getMap()
    {
        return self::$detail;
    }
    public static function getName($type)
    {
        return isset(self::$detail[$type]) ? self::$detail[$type]:'';
    }

    public function getText()
    {
        return self::$detail[$this->val];
    }

    public static function fromText(string $text)
    {
        switch ($text) {
            case '受托管理':
                return new self(self::MANDATOR_MANAGER);
                break;
            case '自我管理':
                return new self(self::SELF_MANAGER);
                break;
            case '顾问管理':
                return new self(self::CONSULTANT_MANAGER);
                break;
            default:
                return new self(-1);
        }
    }
}
