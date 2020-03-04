<?php

namespace PhalconPlus\Com\Protos\Schemas;

/**
 * @Title("Id")
 * @Required({"id"})
 */
class Id extends \PhalconPlus\Com\Protos\ProtoBase
{
    /**
     * @Key("id")
     * @Type("integer")
     * @Minimum(1)
     */
    protected $id;
    /**
     * @param int $id
     */
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    /**
     * @return int
     */
    public function getId() : ?int
    {
        return $this->id;
    }
}