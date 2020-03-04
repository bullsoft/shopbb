<?php
namespace Common\Protos\WealthTech\Enums;
use \PhalconPlus\Enum\AbstractEnum;


//XCRM 客户性质
class CustomerType extends AbstractEnum
{
    const PERSON = 1; //个人
    const ORGANIZATION = 2; //机构用户

}
