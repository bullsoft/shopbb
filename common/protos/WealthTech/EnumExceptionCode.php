<?php
namespace Common\Protos\WealthTech;
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
    const PERMISSION_DENY = 20005; //权限不允许
    const NO_BIND_MOBILE = 20006; //未绑定手机号
    const MOBILE_FORMAT_WRONG = 21000;

    const SMSCODE_ACCOUNT_LOCKED = 22000;
    const SMSCODE_EMPTY = 22001;
    const SMSCODE_WRONG_TIMES = 22002;
    const SMSCODE_INTERVAL_LESS = 22003;
    const SMSCODE_NO_SEND = 22004;
    const SMSCODE_OVERDUE = 22005;
    const SMSCODE_WRONG = 22006;
    const SMSCODE_NEED_CAPTCHA = 22008;
    const SMS_SEND_FAILED = 22009;
    const SMSCODE_SENDTIMES_NEED_CAPTCHA = 22010;
    const SMSCODE_LOGIN_LOCK_ACCOUNT = 22013;



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
            "message" => "用户未登录",
            "level" => EnumLoggerLevel::INFO,
        ],

        self::USER_ALREADY_EXISTS => [
            "message" => "用户资料(%s)已存在",
            "level"   => EnumLoggerLevel::INFO,
        ],
        self::MOBILE_FORMAT_WRONG => [
            "message" => "手机格式不正确",
            "level" => EnumLoggerLevel::INFO,
        ],
        self::SMSCODE_ACCOUNT_LOCKED  => [
            "message" => "短信被锁定",
            "level" => EnumLoggerLevel::INFO,
        ],
        self::SMSCODE_WRONG => [
            'message' => '验证码错误，请重新输入',
            'level' => EnumLoggerLevel::INFO,
        ],
        self::SMSCODE_EMPTY => [
            'message' => '验证码不能为空',
            "level" => EnumLoggerLevel::INFO,
        ],
        self::SMSCODE_WRONG_TIMES => [
            "message" => ""
        ],
        self::SMSCODE_INTERVAL_LESS => [
            'message' => '验证码发送间隔时间太短，请稍后再操作',
            'level' => EnumLoggerLevel::INFO,
        ],
        self::SMSCODE_NEED_CAPTCHA => [
            'message' => '验证码错误次数过多，请输入图片验证码',
            'level' => EnumLoggerLevel::INFO,
        ],
        self::SMSCODE_SENDTIMES_NEED_CAPTCHA => [
            'message' => '验证码发送次数过多，请输入图片验证码',
            'level' => EnumLoggerLevel::INFO,
        ],
        self::SMSCODE_OVERDUE => [
            'message' => '验证码已过期，请重新获取',
            'level' => EnumLoggerLevel::INFO,
        ],
        self::SMSCODE_NO_SEND => [
            'message' => '验证码错误，请重新获取',
            'level' => EnumLoggerLevel::INFO,
        ],
        self::SMS_SEND_FAILED => [
            "message" => "验证码发送失败，请重新获取",
            "level" => EnumLoggerLevel::INFO,
        ],
        self::PERMISSION_DENY => [
            "message" => "无权限",
            "level" => EnumLoggerLevel::INFO,
        ],
        self::NO_BIND_MOBILE => [
            "message" => "未绑定手机号",
            "level" => EnumLoggerLevel::INFO,
        ]

    ];

    public static function exceptionClassPrefix()
    {
        return __NAMESPACE__ . "\\Exceptions\\";
    }

}
