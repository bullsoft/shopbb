<?php

namespace LightCloud\Com\Protos\CentCMS\Schemas;

/**
 * @Title("Item")
 * @Required({"name", "categoryId", "identity", "schemaTemplateId", "content", "createUserId"})
 */
class Item extends \PhalconPlus\Com\Protos\ProtoBase
{
    /**
     * @Key("name")
     * @Type("string")
     * @MinLength(6)
     */
    protected $name;
    /**
     * @Key("categoryId")
     * @Type("integer")
     * @Minimum(1)
     */
    protected $categoryId;
    /**
     * @Key("desc")
     * @Type("string")
     */
    protected $desc;
    /**
     * @Key("identity")
     * @Type("string")
     * @MinLength(4)
     */
    protected $identity;
    /**
     * @Key("schemaTemplateId")
     * @Type("integer")
     * @Minimum(1)
     */
    protected $schemaTemplateId;
    /**
     * @Key("content")
     * @Type("string")
     */
    protected $content;
    /**
     * @Key("sortNo")
     * @Type("integer")
     * @Minimum(0)
     */
    protected $sortNo;
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("createUserId")
     * @Type("integer")
     * @Minimum(1)
     */
    protected $createUserId;
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
     * @param int $categoryId
     */
    public function setCategoryId(?int $categoryId)
    {
        $this->categoryId = $categoryId;
    }
    /**
     * @return int
     */
    public function getCategoryId() : ?int
    {
        return $this->categoryId;
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
     * @param int $schemaTemplateId
     */
    public function setSchemaTemplateId(?int $schemaTemplateId)
    {
        $this->schemaTemplateId = $schemaTemplateId;
    }
    /**
     * @return int
     */
    public function getSchemaTemplateId() : ?int
    {
        return $this->schemaTemplateId;
    }
    /**
     * @param string $content
     */
    public function setContent(?string $content)
    {
        $this->content = $content;
    }
    /**
     * @return string
     */
    public function getContent() : ?string
    {
        return $this->content;
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
    /**
     * @param int $createUserId
     */
    public function setCreateUserId(?int $createUserId)
    {
        $this->createUserId = $createUserId;
    }
    /**
     * @return int
     */
    public function getCreateUserId() : ?int
    {
        return $this->createUserId;
    }
}