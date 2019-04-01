<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: UserVerifyModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class UserVerifyModel extends ModelBase
{

    /**
     * @var integer
     * @table user_verify
     */
    public $id = null;

    /**
     * @var integer
     * @table user_verify
     */
    public $user_id = null;

    /**
     * @var string
     * @table user_verify
     */
    public $realname = '';

    /**
     * @var integer
     * @table user_verify
     */
    public $sex = null;

    /**
     * @var integer
     * @table user_verify
     */
    public $birthday = null;

    /**
     * @var integer
     * @table user_verify
     */
    public $home_addr = null;

    /**
     * @var string
     * @table user_verify
     */
    public $id_card = '';

    /**
     * @var string
     * @table user_verify
     */
    public $id_avatar = null;

    /**
     * @var string
     * @table user_verify
     */
    public $intro = null;

    /**
     * @var unknown
     * @table user_verify
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table user_verify
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->userId = NULL;
        $this->realname = '';
        $this->sex = NULL;
        $this->birthday = NULL;
        $this->homeAddr = NULL;
        $this->idCard = '';
        $this->idAvatar = NULL;
        $this->intro = NULL;
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
            'realname' => 'realname', 
            'sex' => 'sex', 
            'birthday' => 'birthday', 
            'home_addr' => 'homeAddr', 
            'id_card' => 'idCard', 
            'id_avatar' => 'idAvatar', 
            'intro' => 'intro', 
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
        return 'user_verify';
    }


}

