<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: SkuFieldInfoModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class SkuFieldInfoModel extends ModelBase
{

    /**
     * @var integer
     * @table sku_field_info
     */
    public $id = null;

    /**
     * @var integer
     * @table sku_field_info
     */
    public $sku_id = null;

    /**
     * @var integer
     * @table sku_field_info
     */
    public $product_id = null;

    /**
     * @var integer
     * @table sku_field_info
     */
    public $cate_id = null;

    /**
     * @var integer
     * @table sku_field_info
     */
    public $field_id = null;

    /**
     * @var string
     * @table sku_field_info
     */
    public $field_value = null;

    /**
     * @var unknown
     * @table sku_field_info
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table sku_field_info
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->skuId = NULL;
        $this->productId = NULL;
        $this->cateId = NULL;
        $this->fieldId = NULL;
        $this->fieldValue = NULL;
        $this->ctime = '0001-01-01 00:00:00';
        $this->mtime = '0001-01-01 00:00:00';
    }

    /**
     * Column map for database fields and model properties
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'sku_id' => 'skuId', 
            'product_id' => 'productId', 
            'cate_id' => 'cateId', 
            'field_id' => 'fieldId', 
            'field_value' => 'fieldValue', 
            'ctime' => 'ctime', 
            'mtime' => 'mtime', 
        );
    }

    public function initialize()
    {
        parent::initialize();
        $this->setWriteConnectionService("db");
        $this->setReadConnectionService("dbRead");
    }

    /**
     * return related table name
     */
    public function getSource()
    {
        return 'sku_field_info';
    }


}

