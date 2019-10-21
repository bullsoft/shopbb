<?php
namespace LightCloud\Com\Protos\CentCMS\Enums;
use \PhalconPlus\Enum\AbstractEnum;

class ItemStatus extends AbstractEnum
{
    const __default = self::TO_PUBLISH;

    const TO_PUBLISH = 0;
    const PUBLISHED = 1;
}