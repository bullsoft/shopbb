<?php

namespace LightCloud\Com\Protos\CentCMS\Schemas;

/**
 * @Title("Category")
 * @Required({"name", "parentId", "identity"})
 */
class Category extends \PhalconPlus\Com\Protos\ProtoBase
{
    /**
     * @Key("name")
     * @Type("string")
     * @MinLength(6)
     */
    protected $name;
    /**
     * @Key("parentId")
     * @Type("integer")
     * @Minimum(1)
     */
    protected $parentId;
    /**
     * @Key("desc")
     * @Type("string")
     */
    protected $desc;
    /**
     * @Key("identity")
     * @Type("string")
     * @Pattern("^[_0-9a-zA-Z]{1,32}$")
     */
    protected $identity;
    /**
     * @Key("sortNo")
     * @Type("integer")
     */
    protected $sortNo;
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param int $parentId
     */
    public function setParentId(?int $parentId)
    {
        $this->parentId = $parentId;
    }
    /**
     * @return int
     */
    public function getParentId() : ?int
    {
        return $this->parentId;
    }
    /**
     * @param string $desc
     */
    public function setDesc(?string $desc)
    {
        $this->desc = $desc;
    }
    /**
     * @return string
     */
    public function getDesc() : ?string
    {
        return $this->desc;
    }
    /**
     * @param string $identity
     */
    public function setIdentity(?string $identity)
    {
        $this->identity = $identity;
    }
    /**
     * @return string
     */
    public function getIdentity() : ?string
    {
        return $this->identity;
    }
    /**
     * @param int $sortNo
     */
    public function setSortNo(?int $sortNo)
    {
        $this->sortNo = $sortNo;
    }
    /**
     * @return int
     */
    public function getSortNo() : ?int
    {
        return $this->sortNo;
    }
    /**
     * @param int $status
     */
    public function setStatus(?int $status)
    {
        $this->status = $status;
    }
    /**
     * @return int
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
}