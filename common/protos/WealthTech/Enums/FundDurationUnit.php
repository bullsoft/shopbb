<?php
namespace Common\Protos\WealthTech\Enums;
use \PhalconPlus\Enum\AbstractEnum;

//XCrm系统中产品期限单位
class FundDurationUnit extends AbstractEnum
{
    const UNIT_DAY = 3; //天
    const UNIT_MONTH = 2; //月
    const UNIT_YEAR = 1;//年

    private static $detail = [
        self::UNIT_DAY => '天',
        self::UNIT_MONTH => '月',
        self::UNIT_YEAR => '年',
        ];
    public static function getTypeName($type)
    {
        return isset(self::$detail[$type]) ? self::$detail[$type]:'';
    }

    public static function getTypeMap()
    {
        return self::$detail;
    }

    //计算基金年化金额, 如果期限单位不是枚举中的，则直接返回0
    public static function calFundYearlyAmount($durationUnit, $duration, $amount)
    {
        switch($durationUnit) {
            case self::UNIT_DAY:
                return $amount*$duration/365.0;
            case self::UNIT_MONTH:
                return $amount*$duration/12.0;
            case self::UNIT_YEAR:
                return $amount*$duration;
            default:
                return 0;
        }
    }
}
