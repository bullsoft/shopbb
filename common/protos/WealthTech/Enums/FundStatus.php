<?php

namespace Common\Protos\WealthTech\Enums;

use \PhalconPlus\Enum\AbstractEnum;

class FundStatus extends AbstractEnum
{
    const __default = self::RUNNING;

    const RUNNING              =  1; //'正在运作';
    const POST_CLEAR           =  2; //'延期清算';
    const PRE_CLEAR            =  3; //'提前清算';
    const NORMAL_CLEAR         =  4; //'正常清算';
    const ABNORMAL_CLEAR       =  5; //'非正常清算';
    const CONSULTANT_TERMINATE =  6; //'投顾协议已终止';
    const UNKNOWN              =  11;//'未知';

    const DELIST = 31; //'摘牌',
    const ISSUE  = 32; //'发行',
    const LIST   = 33; //'已上市',

    private static $detail = [
        self::RUNNING        => '正在运作',
        self::POST_CLEAR     => '延期清算',
        self::PRE_CLEAR      => '提前清算',
        self::NORMAL_CLEAR   => '正常清算',
        self::ABNORMAL_CLEAR => '非正常清算',
        self::CONSULTANT_TERMINATE => '投顾协议已终止',
        self::UNKNOWN => '未知',
        // 公募
        self::DELIST => '摘牌',   //D
        self::ISSUE  => '发行',   //I
        self::LIST   => '已上市', //L
    ];

    public static function getMap()
    {
        return self::$detail;
    }
    public static function getName($status)
    {
        return isset(self::$detail[$status]) ? self::$detail[$status]:'';
    }

    public function getText()
    {
        return self::$detail[$this->val];
    }

    public static function fromText(string $text)
    {
        $detail = array_flip(self::$detail);
        if(isset($detail[$text])) {
            return new self($detail[$text]);
        }
        return new self(self::UNKNOWN);
    }
}
