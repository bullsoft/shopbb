<?php

namespace LightCloud\Uc\Models;

/**
 * Phalcon Model: OauthAuthorizationCodesModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\Uc\Models
 * @version $Rev:2019-10-30 11:25:14$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class OauthAuthorizationCodesModel extends ModelBase
{

    /**
     * @var integer
     * @table oauth_authorization_codes
     */
    public $id = null;

    /**
     * @var integer
     * @table oauth_authorization_codes
     */
    public $user_id = null;

    /**
     * @var string
     * @table oauth_authorization_codes
     */
    public $client_id = '';

    /**
     * @var string
     * @table oauth_authorization_codes
     */
    public $scope = null;

    /**
     * @var string
     * @table oauth_authorization_codes
     */
    public $authorization_code = '';

    /**
     * @var integer
     * @table oauth_authorization_codes
     */
    public $revoked = '0';

    /**
     * @var string
     * @table oauth_authorization_codes
     */
    public $redirect_url = null;

    /**
     * @var datetime
     * @table oauth_authorization_codes
     */
    public $expires = null;

    /**
     * @var datetime
     * @table oauth_authorization_codes
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var datetime
     * @table oauth_authorization_codes
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->userId = NULL;
        $this->clientId = '';
        $this->scope = NULL;
        $this->authorizationCode = '';
        $this->revoked = '0';
        $this->redirectUrl = NULL;
        $this->expires = NULL;
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
            'client_id' => 'clientId', 
            'scope' => 'scope', 
            'authorization_code' => 'authorizationCode', 
            'revoked' => 'revoked', 
            'redirect_url' => 'redirectUrl', 
            'expires' => 'expires', 
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
    public function getSource() : string
    {
        return 'oauth_authorization_codes';
    }


}

