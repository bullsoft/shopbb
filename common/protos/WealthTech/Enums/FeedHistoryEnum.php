<?php
namespace Common\Protos\WealthTech\Enums;
use \PhalconPlus\Enum\AbstractEnum;

class FeedHistoryEnum extends AbstractEnum
{

    const REDIS_KEY_PREFIX = 'FEEDLIST_CATEGORY_';

    private static $categoryName = array(
            'YAOWEN' => '要闻',
            'GONGSI' => '公司',
            'SHICHANG' => '市场',
            'YANJIU' => '研究',
            // 'ZHITONG' => '智通参考',
            'ZHITONG' => '必读',
            'XINGU' => '新股',
            'GONGGAO' => '公告',
            'MEIGU' => '美股',
    );

    public static function getTypeName ($ch_name)
    {
        return array_search($ch_name, self::$categoryName);
    }

    public static function getTypeMap ()
    {
        return self::$categoryName;
    }

    public static function getDefaultTypeName ()
    {
        return 'GONGGAO';
    }
}
