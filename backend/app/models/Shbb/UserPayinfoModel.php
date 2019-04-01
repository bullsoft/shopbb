<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: UserPayinfoModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class UserPayinfoModel extends ModelBase
{

    /**
     * @var integer
     * @table user_payinfo
     */
    public $id = null;

    /**
     * @var integer
     * @table user_payinfo
     */
    public $user_id = null;

    /**
     * @var integer
     * @table user_payinfo
     */
    public $pay_sp_id = null;

    /**
     * @var string
     * @table user_payinfo
     */
    public $account = '';

    /**
     * @var integer
     * @table user_payinfo
     */
    public $is_delete = '0';

    /**
     * @var integer
     * @table user_payinfo
     */
    public $status = '0';

    /**
     * @var unknown
     * @table user_payinfo
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table user_payinfo
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->userId = NULL;
        $this->paySpId = NULL;
        $this->account = '';
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
            'user_id' => 'userId', 
            'pay_sp_id' => 'paySpId', 
            'account' => 'account', 
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
        return 'user_payinfo';
    }


}

