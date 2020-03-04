<?php
namespace Common\Protos\WealthTech\Enums;
use \PhalconPlus\Enum\AbstractEnum;

class FundType extends AbstractEnum
{
    const __default = self::OTHER_TYPE;

    const SECURITIES_TYPE   = 1;  //证券类
    const EQUITY_TYPE       = 2;  //股权类
    const STARTUP_TYPE      = 3;  //创投类
    const OTHER_INVEST_TYPE = 4;  //其他投资
    const TRUST_TYPE        = 5;  //信托计划
    const FUTURE_AMP_TYPE   = 6;  //期货资产管理计划
    const FUND_SUB_COMP_TYPE    = 7;  //基金子公司
    const INSURE_AMP_TYPE       = 8;  //保险资产管理计划
    const FUND_SPECIAL_ACC_TYPE = 9;  //基金专户
    const OTHER_TYPE            = 10; //其它类
    const SEC_AMP_TYPE          = 11; //证券资产管理计划

    const PUB_MIXED_TYPE = 101; //混合型
    const PUB_STOCK_TYPE = 102; //股票型
    const PUB_DEB_TYPE   = 103; //债券型
    const PUB_COMMODITY_TYPE = 104; //商品型
    const PUB_MONEY_TYPE     = 105; //货币型
    const PUB_GUARANTEED_TYPE   = 106; //保本型
    const PUB_OTHER_INVEST_TYPE = 107; //另类投资型
/*
    [
        //私募基金类型
        '私募证券投资基金' => 1,
        '股权投资基金' => 2,
        '创业投资基金' => 3,
        '其他私募投资基金' => 4,
        '信托计划' =>  5,
        '期货公司及其子公司的资产管理计划' => 6,
        '基金子公司' => 7,
        '保险公司及其子公司的资产管理计划' => 8,
        '基金专户' => 9,
        '其他' => 10,
        '证券公司及其子公司的资产管理计划' => 11,
        //公募基金类型
        '混合型' => 101,
        '股票型' => 102,
        '债券型' => 103,
        '商品型' => 104,
        '货币市场型' => 105,
        '保本型' => 106,
        '另类投资型' => 107,
    ]
*/
    private static $detail = [
        // 私募
        self::SECURITIES_TYPE => '证券投资基金',
        self::EQUITY_TYPE  => '股权投资基金',
        self::STARTUP_TYPE => '创业投资基金',
        self::OTHER_INVEST_TYPE => '其他投资基金',
        self::TRUST_TYPE => '信托计划',
        self::FUTURE_AMP_TYPE => '期货资产管理计划',
        self::FUND_SUB_COMP_TYPE => '基金子公司',
        self::INSURE_AMP_TYPE => '保险资产管理计划',
        self::FUND_SPECIAL_ACC_TYPE => '基金专户',
        self::OTHER_TYPE => '其他类',
        self::SEC_AMP_TYPE => '证券资产管理计划',
        // 公募
        self::PUB_MIXED_TYPE => '混合型',
        self::PUB_STOCK_TYPE => '股票型',
        self::PUB_DEB_TYPE   => '债券型',
        self::PUB_COMMODITY_TYPE => '商品型',
        self::PUB_MONEY_TYPE => '货币型',
        self::PUB_GUARANTEED_TYPE => '保本型',
        self::PUB_OTHER_INVEST_TYPE => '另类投资型',
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
