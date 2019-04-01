<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: ProductInfoModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class ProductInfoModel extends ModelBase
{

    /**
     * @var integer
     * @table product_info
     */
    public $id = null;

    /**
     * @var string
     * @table product_info
     */
    public $name = '';

    /**
     * @var integer
     * @table product_info
     */
    public $price = null;

    /**
     * @var string
     * @table product_info
     */
    public $slogan = null;

    /**
     * @var string
     * @table product_info
     */
    public $intro = null;

    /**
     * @var integer
     * @table product_info
     */
    public $cate_id = '0';

    /**
     * @var integer
     * @table product_info
     */
    public $brand_id = null;

    /**
     * @var integer
     * @table product_info
     */
    public $need_shipped = null;

    /**
     * @var unknown
     * @table product_info
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table product_info
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->name = '';
        $this->price = NULL;
        $this->slogan = NULL;
        $this->intro = NULL;
        $this->cateId = '0';
        $this->brandId = NULL;
        $this->needShipped = NULL;
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
            'name' => 'name', 
            'price' => 'price', 
            'slogan' => 'slogan', 
            'intro' => 'intro', 
            'cate_id' => 'cateId', 
            'brand_id' => 'brandId', 
            'need_shipped' => 'needShipped', 
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
        return 'product_info';
    }


}

