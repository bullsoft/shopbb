<?php
namespace LightCloud\Com\Protos\Uc;
use \PhalconPlus\Enum\Exception as EnumException;
use \PhalconPlus\Assert\Assertion as Assert;
use \PhalconPlus\Com\Protos\EnumLoggerLevel;

/** 
 * 建议从一个比较大的数字起，框架占用了 [0, 10000) 以内的异常码
 * 可根据此类自动生成异常类，类实现如下:
 * <code>
 * namespace Demo\Protos;
 * class ExceptionUserNotExists extends \PhalconPlus\Base\Exception
 * {
 *     protected $code = 10000;
 *     protected $message = "未知错误";
 *     protected $level = 3;
 * }
 * </code>
 *
 */
class EnumExceptionCode extends EnumException
{
    const __default = self::UNKNOWN;
    const UNKNOWN = 10000;

    const USER_NOT_EXISTS = 20001;
    const AUTH_FAILED = 20002;
    const NEED_LOGIN = 20003;
    const USER_ALREADY_EXISTS = 20004;


    protected static $details = [
        
        self::UNKNOWN => [
            "message" => "未知错误",
            "level" => EnumLoggerLevel::ERROR,
        ],

        self::USER_NOT_EXISTS => [
            "message" => "用户(%s)不存在，请核实后再试",
            "level" =>  EnumLoggerLevel::INFO,
        ],

        self::NEED_LOGIN => [
            "message" => "需要登录",
            "level" => EnumLoggerLevel::INFO,
        ],

        self::USER_ALREADY_EXISTS => [
            "message" => "用户资料(%s)已存在",
            "level"   => EnumLoggerLevel::INFO,
        ],
        
    ];

    public static function exceptionClassPrefix()
    {
        return __NAMESPACE__ . "\\Exceptions\\";
    }

}