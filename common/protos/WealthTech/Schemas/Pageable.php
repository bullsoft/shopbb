<?php
namespace Common\Protos\WealthTech\Schemas;

/**
 * @Title("Pageable")
 */
class Pageable extends \PhalconPlus\Base\Pagable
{
    public function __construct(int $pageNo = 1, int $pageSize = 20)
    {
        $this->setPageNo($pageNo);
        $this->setPageSize($pageSize);
    }
}
