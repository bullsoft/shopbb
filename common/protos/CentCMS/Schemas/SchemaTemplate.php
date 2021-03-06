<?php

namespace LightCloud\Com\Protos\CentCMS\Schemas;

/**
 * @Title("SchemaTemplate")
 * @Required({"name", "identity", "content", "createUserId"})
 */
class SchemaTemplate extends \PhalconPlus\Com\Protos\ProtoBase
{
    /**
     * @Key("name")
     * @Type("string")
     * @Pattern("^[_0-9a-zA-Z]{1,32}$")
     */
    protected $name;
    /**
     * @Key("desc")
     * @Type("string")
     */
    protected $desc;
    /**
     * @Key("identity")
     * @Type("string")
     */
    protected $identity;
    /**
     * @Key("content")
     * @Type("string")
     */
    protected $content;
    /**
     * @Key("status")
     * @Type("integer")
     * @Minimum(1)
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