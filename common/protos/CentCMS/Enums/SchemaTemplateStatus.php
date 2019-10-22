<?php
namespace LightCloud\Com\Protos\CentCMS\Enums;
use \PhalconPlus\Enum\AbstractEnum;

class SchemaTemplateStatus extends AbstractEnum
{
    const __default = self::STATUS_NO_RELEASE;
    
    const STATUS_NO_RELEASE = 0; // 待发布
    const STATUS_RELEASED = 1; // 已发布

    private static $detail = [
        self::STATUS_NO_RELEASE => '待发布',
        self::STATUS_RELEASED   => '已发布',
    ];

    public function getTypeName()
    {
        return self::$detail[$this->val];
    }

    public static function getTypeMap()
    {
        return self::$detail;
    }
}