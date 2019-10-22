<?php

namespace LightCloud\Com\Protos\CentCMS\Schemas;

/**
 * @Title("RequestSchemaTemplateList")
 * @Required({"pageable"})
 */
class RequestSchemaTemplateList extends \PhalconPlus\Com\Protos\ProtoBase
{
    /**
     * @Key("name")
     * @Type("string")
     * @MinLength(6)
     */
    protected $name;
    /**
     * @Key("createUserId")
     * @Type("string")
     */
    protected $createUserId;
    /**
     * @Key("pageable")
     * @Ref("LightCloud\Com\Protos\CentCMS\Schemas\Pageable")
     */
    protected $pageable;
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
     * @param string $createUserId
     */
    public function setCreateUserId(?string $createUserId)
    {
        $this->createUserId = $createUserId;
    }
    /**
     * @return string
     */
    public function getCreateUserId() : ?string
    {
        return $this->createUserId;
    }
    /**
     * @param Pageable $pageable
     */
    public function setPageable(?Pageable $pageable)
    {
        $this->pageable = $pageable;
    }
    /**
     * @return Pageable
     */
    public function getPageable() : ?Pageable
    {
        return $this->pageable;
    }
}