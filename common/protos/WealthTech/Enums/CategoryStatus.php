<?php
namespace Common\Protos\WealthTech\Enums;
use \PhalconPlus\Enum\AbstractEnum;

class CategoryStatus extends AbstractEnum
{
    const __default = self::TO_PUBLISH;

    const TO_PUBLISH = 0;
    const PUBLISHED = 1;
}