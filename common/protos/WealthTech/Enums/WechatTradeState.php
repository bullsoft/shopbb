<?php
namespace Common\Protos\WealthTech\Enums;
use \PhalconPlus\Enum\AbstractEnum;

class WechatTradeState extends AbstractEnum
{
    const __default = self::NOTPAY;

    const NOTPAY = 'NOTPAY';  //未支付
    const SUCCESS = 'SUCCESS'; //支付成功
    const REFUND = 'REFUND'; //转入退款
    const CLOSED = 'CLOSED'; //已关闭
    const REVOKED = 'REVOKED'; //已撤销（刷卡支付)
    const USERPAYING = 'USERPAYING';//用户支付中
    const PAYERROR = 'PAYERROR'; //支付失败(其他原因，如银行返回失败)


}
