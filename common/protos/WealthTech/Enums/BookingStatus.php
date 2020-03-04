<?php
namespace Common\Protos\WealthTech\Enums;

use \PhalconPlus\Enum\AbstractEnum;

//XCrm系统中预约状态
class BookingStatus extends AbstractEnum
{
    const INIT = 0; //预约初始状态, 待客户确认
    const CANCEL = 1;//预约已取消
    const CUSTOMER_CONFIRM  = 2; //预约客户已确认
    const PAID = 3; //客户已打款
    const DISABLED = 4; //废单

    private static $detail = [
        self::INIT => '待客户确认',
        self::CANCEL => '已取消',  //已取消
        self::CUSTOMER_CONFIRM => '预约成功', //客户已确认
        self::PAID => '已打款', //已打款
        self::DISABLED => '废单', // cms废单操作
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
