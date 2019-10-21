<?php

namespace LightCloud\Com\Protos\CentCMS\Schemas;

/**
 * @Title("RequestItemList")
 * @Required({"categoryId", "pageable"})
 */
class RequestItemList extends \PhalconPlus\Com\Protos\ProtoBase
{
    /**
     * @Key("categoryId")
     * @Type("integer")
     * @Minimum(1)
     */
    protected $categoryId;
    /**
     * @Key("name")
     * @Type("string")
     * @MinLength(6)
     */
    protected $name;
    /**
     * @Key("pageable")
     * @Ref("LightCloud\Com\Protos\CentCMS\Schemas\Pageable")
     */
    protected $pageable;
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