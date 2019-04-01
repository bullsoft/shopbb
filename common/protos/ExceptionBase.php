<?php
namespace PhalconPlus\Com\Protos;
/**
 * 此类由代码自动生成，请不要修改
 */
class ExceptionBase extends \PhalconPlus\Base\Exception
{
    public function __construct($info = "", \Phalcon\Logger\Adapter $logger = null)
    {
        if(is_null($logger)) {
            $logger = di()->get("logger");
        }
        parent::__construct($info, $logger);
    }
}