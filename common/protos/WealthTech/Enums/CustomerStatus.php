<?php
namespace Common\Protos\WealthTech\Enums;
use \PhalconPlus\Enum\AbstractEnum;


//XCRM 客户状态
class CustomerStatus extends AbstractEnum
{
    /*
    const BIND_EXPIRED = -1; //绑定过期
    const NO_BIND_NO_CUSTOMER = 0; //未绑定未锁定, 微信关联理财师但没有客户信息
    const NO_BIND_HAS_BROKER = 1; //未绑定已锁定理财师, 已预约,客户未确认
    const NO_BIND_HAS_BROKER_CONFIRM = 2; //未绑定已锁定理财师, 已预约，客户已确认
    const BIND_BROKER_TMP = 3; //未已绑定已锁定理财师  客户确认后录入客户信息
    const BIND_BORKER_FOREVER = 4; //永久绑定
     */
    const INIT = 1; //初始用户
    const HAS_TRADE = 2; //有过预约记录的用户?

}
