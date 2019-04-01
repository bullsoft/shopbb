<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: DealMoneyModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class DealMoneyModel extends ModelBase
{

    /**
     * @var integer
     * @table deal_money
     */
    public $id = null;

    /**
     * @var integer
     * @table deal_money
     */
    public $user_id = null;

    /**
     * @var integer
     * @table deal_money
     */
    public $available = null;

    /**
     * @var integer
     * @table deal_money
     */
    public $freeze = null;

    /**
     * @var unknown
     * @table deal_money
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table deal_money
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->userId = NULL;
        $this->available = NULL;
        $this->freeze = NULL;
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
            'available' => 'available', 
            'freeze' => 'freeze', 
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
        return 'deal_money';
    }


}

