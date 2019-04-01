<?php

namespace LightCloud\Uc\Models;

/**
 * Phalcon Model: UserModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\Uc\Models
 * @version $Rev:2019-03-30 17:43:58$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class UserModel extends ModelBase
{

    /**
     * @var integer
     * @table user
     */
    public $id = null;

    /**
     * @var string
     * @table user
     */
    public $mobile = '';

    /**
     * @var string
     * @table user
     */
    public $salt = '';

    /**
     * @var string
     * @table user
     */
    public $passwd = '';

    /**
     * @var string
     * @table user
     */
    public $email = '';

    /**
     * @var integer
     * @table user
     */
    public $is_email_verified = '0';

    /**
     * @var string
     * @table user
     */
    public $nickname = '';

    /**
     * @var integer
     * @table user
     */
    public $invite_user_id = '0';

    /**
     * @var string
     * @table user
     */
    public $invite_code = '';

    /**
     * @var integer
     * @table user
     */
    public $status = '0';

    /**
     * @var unknown
     * @table user
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table user
     */
    public $mtime = '0001-01-01 00:00:00';

    public function initialize()
    {
        parent::initialize();
        $this->setWriteConnectionService("db");
        $this->setReadConnectionService("dbRead");
    }

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->mobile = '';
        $this->salt = '';
        $this->passwd = '';
        $this->email = '';
        $this->isEmailVerified = '0';
        $this->nickname = '';
        $this->inviteUserId = '0';
        $this->inviteCode = '';
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
            'mobile' => 'mobile', 
            'salt' => 'salt', 
            'passwd' => 'passwd', 
            'email' => 'email', 
            'is_email_verified' => 'isEmailVerified', 
            'nickname' => 'nickname', 
            'invite_user_id' => 'inviteUserId', 
            'invite_code' => 'inviteCode', 
            'status' => 'status', 
            'ctime' => 'ctime', 
            'mtime' => 'mtime', 
        );
    }

    /**
     * return related table name
     */
    public function getSource()
    {
        return 'user';
    }


}

