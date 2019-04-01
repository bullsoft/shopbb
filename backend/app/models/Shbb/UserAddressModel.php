<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: UserAddressModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class UserAddressModel extends ModelBase
{

    /**
     * @var integer
     * @table user_address
     */
    public $id = null;

    /**
     * @var integer
     * @table user_address
     */
    public $user_id = null;

    /**
     * @var string
     * @table user_address
     */
    public $province = null;

    /**
     * @var string
     * @table user_address
     */
    public $city = null;

    /**
     * @var string
     * @table user_address
     */
    public $district = null;

    /**
     * @var string
     * @table user_address
     */
    public $detail = null;

    /**
     * @var string
     * @table user_address
     */
    public $postcode = null;

    /**
     * @var string
     * @table user_address
     */
    public $mobile = null;

    /**
     * @var string
     * @table user_address
     */
    public $telephone = null;

    /**
     * @var unknown
     * @table user_address
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table user_address
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->userId = NULL;
        $this->province = NULL;
        $this->city = NULL;
        $this->district = NULL;
        $this->detail = NULL;
        $this->postcode = NULL;
        $this->mobile = NULL;
        $this->telephone = NULL;
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
            'province' => 'province', 
            'city' => 'city', 
            'district' => 'district', 
            'detail' => 'detail', 
            'postcode' => 'postcode', 
            'mobile' => 'mobile', 
            'telephone' => 'telephone', 
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
        return 'user_address';
    }


}

