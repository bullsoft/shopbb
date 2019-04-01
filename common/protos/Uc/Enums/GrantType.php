<?php
namespace LightCloud\Com\Protos\Uc\Enums;

use \PhalconPlus\Enum\AbstractEnum;

class GrantType extends AbstractEnum
{
    const __default = self::CODE;
    const PASSWORD = "password"; //  for trusted first party clients
    const CODE = "code"; // most populate 
    const TOKEN = "token"; // for user-agent-based clients
}