<?php

namespace LightCloud\Com\Protos\CentCMS\Schemas;

/**
 * @Title("Ids")
 * @Required({"ids"})
 */
class Ids extends \PhalconPlus\Com\Protos\ProtoBase
{
    /**
     * @Key("ids")
     * @Type("array")
     * @Items(@Schema(type="integer", minimum=1))
     * @UniqueItems(true)
     * @MinItems(1)
     */
    protected $ids;
    /**
     * @param array<int> $ids
     */
    public function setIds(?array $ids)
    {
        $this->ids = $ids;
    }
    /**
     * @return array<int>
     */
    public function getIds() : ?array
    {
        return $this->ids;
    }
}