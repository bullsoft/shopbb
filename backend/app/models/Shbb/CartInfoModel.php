<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: CartInfoModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class CartInfoModel extends ModelBase
{

    /**
     * @var integer
     * @table cart_info
     */
    public $id = null;

    /**
     * @var string
     * @table cart_info
     */
    public $cart_no = null;

    /**
     * @var string
     * @table cart_info
     */
    public $session_id = null;

    /**
     * @var integer
     * @table cart_info
     */
    public $sku_id = null;

    /**
     * @var integer
     * @table cart_info
     */
    public $product_id = null;

    /**
     * @var integer
     * @table cart_info
     */
    public $user_id = null;

    /**
     * @var integer
     * @table cart_info
     */
    public $seller_id = null;

    /**
     * @var integer
     * @table cart_info
     */
    public $price = null;

    /**
     * @var integer
     * @table cart_info
     */
    public $qty = null;

    /**
     * @var integer
     * @table cart_info
     */
    public $is_delete = '0';

    /**
     * @var integer
     * @table cart_info
     */
    public $status = '0';

    /**
     * @var unknown
     * @table cart_info
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table cart_info
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->cartNo = NULL;
        $this->sessionId = NULL;
        $this->skuId = NULL;
        $this->productId = NULL;
        $this->userId = NULL;
        $this->sellerId = NULL;
        $this->price = NULL;
        $this->qty = NULL;
        $this->isDelete = '0';
        $this->status = '0';
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
            'cart_no' => 'cartNo', 
            'session_id' => 'sessionId', 
            'sku_id' => 'skuId', 
            'product_id' => 'productId', 
            'user_id' => 'userId', 
            'seller_id' => 'sellerId', 
            'price' => 'price', 
            'qty' => 'qty', 
            'is_delete' => 'isDelete', 
            'status' => 'status', 
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
        return 'cart_info';
    }


}

