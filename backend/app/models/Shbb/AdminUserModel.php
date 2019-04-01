<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: AdminUserModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class AdminUserModel extends ModelBase
{

    /**
     * @var integer
     * @table admin_user
     */
    public $id = null;

    /**
     * @var string
     * @table admin_user
     */
    public $name = '';

    /**
     * @var string
     * @table admin_user
     */
    public $nickname = '';

    /**
     * @var string
     * @table admin_user
     */
    public $salt = '';

    /**
     * @var string
     * @table admin_user
     */
    public $passwd = '';

    /**
     * @var integer
     * @table admin_user
     */
    public $position_id = '0';

    /**
     * @var string
     * @table admin_user
     */
    public $avatar = null;

    /**
     * @var string
     * @table admin_user
     */
    public $mail = null;

    /**
     * @var unknown
     * @table admin_user
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table admin_user
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->name = '';
        $this->nickname = '';
        $this->salt = '';
        $this->passwd = '';
        $this->positionId = '0';
        $this->avatar = NULL;
        $this->mail = NULL;
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
            'nickname' => 'nickname', 
            'salt' => 'salt', 
            'passwd' => 'passwd', 
            'position_id' => 'positionId', 
            'avatar' => 'avatar', 
            'mail' => 'mail', 
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
        return 'admin_user';
    }


}

