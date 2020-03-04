<?php
namespace Common\Protos\WealthTech\Enums;
use \PhalconPlus\Enum\AbstractEnum;

class DealStatus extends AbstractEnum
{
    const __default = self::INIT;

    const INIT = 1;  //初始订单
    const INITIATE_PAYMENT = 2; //已发起支付
    const PAY_SUCCESS = 3; //支付成功
    const PAY_CLOSE = 4;//支付关闭

    private static $map = [
        self::INIT => '未支付',
        self::INITIATE_PAYMENT => '待支付',
        self::PAY_SUCCESS => '支付成功',
        self::PAY_CLOSE => '交易关闭',
    ];

    public static function getShow($status)
    {
         return isset(self::$map[$status]) ? self::$map[$status]:'';
    }

}
