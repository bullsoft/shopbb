<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: DealRecordModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class DealRecordModel extends ModelBase
{

    /**
     * @var integer
     * @table deal_record
     */
    public $id = null;

    /**
     * @var integer
     * @table deal_record
     */
    public $buyer_id = null;

    /**
     * @var integer
     * @table deal_record
     */
    public $buyer_addr_id = '0';

    /**
     * @var integer
     * @table deal_record
     */
    public $seller_id = null;

    /**
     * @var string
     * @table deal_record
     */
    public $deal_no = '';

    /**
     * @var string
     * @table deal_record
     */
    public $cart_no = '';

    /**
     * @var integer
     * @table deal_record
     */
    public $discount_id = '0';

    /**
     * @var integer
     * @table deal_record
     */
    public $shipment_id = '0';

    /**
     * @var integer
     * @table deal_record
     */
    public $amount = null;

    /**
     * @var integer
     * @table deal_record
     */
    public $status = '0';

    /**
     * @var unknown
     * @table deal_record
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table deal_record
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->buyerId = NULL;
        $this->buyerAddrId = '0';
        $this->sellerId = NULL;
        $this->dealNo = '';
        $this->cartNo = '';
        $this->discountId = '0';
        $this->shipmentId = '0';
        $this->amount = NULL;
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
            'buyer_id' => 'buyerId', 
            'buyer_addr_id' => 'buyerAddrId', 
            'seller_id' => 'sellerId', 
            'deal_no' => 'dealNo', 
            'cart_no' => 'cartNo', 
            'discount_id' => 'discountId', 
            'shipment_id' => 'shipmentId', 
            'amount' => 'amount', 
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
        return 'deal_record';
    }


}

