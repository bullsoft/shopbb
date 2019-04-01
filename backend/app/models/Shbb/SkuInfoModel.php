<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: SkuInfoModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class SkuInfoModel extends ModelBase
{

    /**
     * @var integer
     * @table sku_info
     */
    public $id = null;

    /**
     * @var string
     * @table sku_info
     */
    public $name = null;

    /**
     * @var string
     * @table sku_info
     */
    public $slogan = null;

    /**
     * @var integer
     * @table sku_info
     */
    public $product_id = null;

    /**
     * @var integer
     * @table sku_info
     */
    public $seller_id = null;

    /**
     * @var integer
     * @table sku_info
     */
    public $cate_id = null;

    /**
     * @var integer
     * @table sku_info
     */
    public $price = null;

    /**
     * @var integer
     * @table sku_info
     */
    public $amount = null;

    /**
     * @var integer
     * @table sku_info
     */
    public $left_amount = null;

    /**
     * @var integer
     * @table sku_info
     */
    public $least = null;

    /**
     * @var integer
     * @table sku_info
     */
    public $most = null;

    /**
     * @var integer
     * @table sku_info
     */
    public $discount_id = '0';

    /**
     * @var integer
     * @table sku_info
     */
    public $sell_type = '1';

    /**
     * @var integer
     * @table sku_info
     */
    public $is_delete = '1';

    /**
     * @var integer
     * @table sku_info
     */
    public $status = '0';

    /**
     * @var unknown
     * @table sku_info
     */
    public $btime = null;

    /**
     * @var unknown
     * @table sku_info
     */
    public $etime = null;

    /**
     * @var unknown
     * @table sku_info
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table sku_info
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->name = NULL;
        $this->slogan = NULL;
        $this->productId = NULL;
        $this->sellerId = NULL;
        $this->cateId = NULL;
        $this->price = NULL;
        $this->amount = NULL;
        $this->leftAmount = NULL;
        $this->least = NULL;
        $this->most = NULL;
        $this->discountId = '0';
        $this->sellType = '1';
        $this->isDelete = '1';
        $this->status = '0';
        $this->btime = NULL;
        $this->etime = NULL;
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
            'slogan' => 'slogan', 
            'product_id' => 'productId', 
            'seller_id' => 'sellerId', 
            'cate_id' => 'cateId', 
            'price' => 'price', 
            'amount' => 'amount', 
            'left_amount' => 'leftAmount', 
            'least' => 'least', 
            'most' => 'most', 
            'discount_id' => 'discountId', 
            'sell_type' => 'sellType', 
            'is_delete' => 'isDelete', 
            'status' => 'status', 
            'btime' => 'btime', 
            'etime' => 'etime', 
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
        return 'sku_info';
    }


}

