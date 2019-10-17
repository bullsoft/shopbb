<?php

namespace LightCloud\CentCMS\Backend\Models;

/**
 * Phalcon Model: CredentialModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\CentCMS\Backend\Models
 * @version $Rev:2019-10-15 19:53:38$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class CredentialModel extends ModelBase
{

    /**
     * @var integer
     * @table credential
     */
    public $id = null;

    /**
     * @var string
     * @table credential
     */
    public $app_id = 'cms';

    /**
     * @var string
     * @table credential
     */
    public $user_uid = null;

    /**
     * @var string
     * @table credential
     */
    public $ak = null;

    /**
     * @var string
     * @table credential
     */
    public $ak_key = null;

    /**
     * @var string
     * @table credential
     */
    public $sk = null;

    /**
     * @var string
     * @table credential
     */
    public $sk_key = null;

    /**
     * @var string
     * @table credential
     */
    public $create_uid = null;

    /**
     * @var integer
     * @table credential
     */
    public $status = '1';

    /**
     * @var datetime
     * @table credential
     */
    public $ctime = '0000-00-00 00:00:00';

    /**
     * @var datetime
     * @table credential
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->appId = 'cms';
        $this->userUid = NULL;
        $this->ak = NULL;
        $this->akKey = NULL;
        $this->sk = NULL;
        $this->skKey = NULL;
        $this->createUid = NULL;
        $this->status = '1';
        $this->ctime = '0000-00-00 00:00:00';
        $this->mtime = '0001-01-01 00:00:00';
    }

    /**
     * Column map for database fields and model properties
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'app_id' => 'appId', 
            'user_uid' => 'userUid', 
            'ak' => 'ak', 
            'ak_key' => 'akKey', 
            'sk' => 'sk', 
            'sk_key' => 'skKey', 
            'create_uid' => 'createUid', 
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
        return 'credential';
    }


}

