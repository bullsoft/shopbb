<?php
namespace Common\Protos\WealthTech\Enums;
use \PhalconPlus\Enum\AbstractEnum;


//XCrm系统中币种
class Currency extends AbstractEnum
{
    //海外私募转成币种的枚举

    //XCRM系统中的币种枚举
    const AUD = 'AUD';//澳元
    const EUR = 'EUR';//欧元
    const GBP = 'GBP';//英镑
    const HKD = 'HKD';//港币
    const CNY = 'CNY';//人民币
    const USD = 'USD';//美元
    const JPY = 'JPY';//日元
    const CNH = 'CNH';//离岸人民币

    private static $targetCurrency = [
        self::USD,
        self::CNY
    ];

    private static $currencyMap = [
       self::AUD => '澳元',
       self::EUR => '欧元',
       self::GBP => '英镑',
       self::HKD => '港币',
       self::CNY => '人民币',
       self::USD => '美元',
       self::JPY => '日元',
       self::CNH => '离岸人民币',
    ];

    private static $currencyUnitMap = [
       self::AUD => '澳元',
       self::EUR => '欧元',
       self::GBP => '镑',
       self::HKD => '港元',
       self::CNY => '元',
       self::USD => '美元',
       self::JPY => '日元',
       self::CNH => '元',
    ];

    //存入单位和显示单位的换算比例
    private static $currencyUnitConvertMap = [
       self::AUD => 100,
       self::EUR => 100,
       self::GBP => 100,
       self::HKD => 100, //例如：存储是分，但显示是元，相差100倍
       self::CNY => 100,
       self::USD => 100,
       self::JPY => 100,
       self::CNH => 100,
    ];

    public static function getAllTargetCurrency()
    {
        return self::$targetCurrency;
    }

    public static function getCurrencyName($currency)
    {
        return isset(self::$currencyMap[$currency]) ? self::$currencyMap[$currency]:'';
    }

    public static function getCurrencyMap()
    {
        return self::$currencyMap;
    }

    public static function getCurrencyUnit($currency)
    {
        return isset(self::$currencyUnitMap[$currency]) ? self::$currencyUnitMap[$currency]:'';
    }

    public static function getCurrencyUnitConvert($currency)
    {
        return isset(self::$currencyUnitConvertMap[$currency]) ? self::$currencyUnitConvertMap[$currency]:1;
    }
}
