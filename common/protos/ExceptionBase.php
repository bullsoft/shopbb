<?php
namespace PhalconPlus\Com\Protos;
/**
 * 此类由代码自动生成，请不要修改
 */
class ExceptionBase extends \PhalconPlus\Base\Exception
{
    public function __construct($info = "", int $code = 1, \Phalcon\Logger\Adapter $logger = null)
    {
        if(is_null($logger)) {
            $logger = di()->get("logger");
        }
        if($this->code < 1) {
            $this->setCode($code);
        }
        parent::__construct($info, $logger);
    }

    public static function throw(string $info = "", int $code = 1)
    {
        throw new self($info, $code);
    }
}