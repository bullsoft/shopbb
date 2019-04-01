<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: PayRecordModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class PayRecordModel extends ModelBase
{

    /**
     * @var integer
     * @table pay_record
     */
    public $id = null;

    /**
     * @var integer
     * @table pay_record
     */
    public $user_id = null;

    /**
     * @var integer
     * @table pay_record
     */
    public $deal_id = null;

    /**
     * @var integer
     * @table pay_record
     */
    public $amount = null;

    /**
     * @var integer
     * @table pay_record
     */
    public $pay_sp_id = null;

    /**
     * @var integer
     * @table pay_record
     */
    public $status = '0';

    /**
     * @var unknown
     * @table pay_record
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table pay_record
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->userId = NULL;
        $this->dealId = NULL;
        $this->amount = NULL;
        $this->paySpId = NULL;
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
            'user_id' => 'userId', 
            'deal_id' => 'dealId', 
            'amount' => 'amount', 
            'pay_sp_id' => 'paySpId', 
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
        return 'pay_record';
    }


}

