<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: UserInfoModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class UserInfoModel extends ModelBase
{

    /**
     * @var integer
     * @table user_info
     */
    public $id = null;

    /**
     * @var string
     * @table user_info
     */
    public $mobile = '';

    /**
     * @var string
     * @table user_info
     */
    public $salt = '';

    /**
     * @var string
     * @table user_info
     */
    public $passwd = '';

    /**
     * @var string
     * @table user_info
     */
    public $email = '';

    /**
     * @var integer
     * @table user_info
     */
    public $is_email_verified = '0';

    /**
     * @var string
     * @table user_info
     */
    public $nickname = '';

    /**
     * @var string
     * @table user_info
     */
    public $open_id = '';

    /**
     * @var integer
     * @table user_info
     */
    public $device_id = '0';

    /**
     * @var string
     * @table user_info
     */
    public $refer = 'HOME';

    /**
     * @var integer
     * @table user_info
     */
    public $points = '0';

    /**
     * @var integer
     * @table user_info
     */
    public $invite_user_id = '0';

    /**
     * @var string
     * @table user_info
     */
    public $invite_code = '';

    /**
     * @var integer
     * @table user_info
     */
    public $status = '0';

    /**
     * @var unknown
     * @table user_info
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table user_info
     */
    public $mtime = '0001-01-01 00:00:00';

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
        $this->openId = '';
        $this->deviceId = '0';
        $this->refer = 'HOME';
        $this->points = '0';
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
            'open_id' => 'openId', 
            'device_id' => 'deviceId', 
            'refer' => 'refer', 
            'points' => 'points', 
            'invite_user_id' => 'inviteUserId', 
            'invite_code' => 'inviteCode', 
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
        return 'user_info';
    }


}

