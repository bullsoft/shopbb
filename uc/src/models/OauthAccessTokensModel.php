<?php

namespace LightCloud\Uc\Models;

/**
 * Phalcon Model: OauthAccessTokensModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\Uc\Models
 * @version $Rev:2019-10-30 11:25:14$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class OauthAccessTokensModel extends ModelBase
{

    /**
     * @var integer
     * @table oauth_access_tokens
     */
    public $id = null;

    /**
     * @var string
     * @table oauth_access_tokens
     */
    public $access_token = '';

    /**
     * @var string
     * @table oauth_access_tokens
     */
    public $scope = null;

    /**
     * @var string
     * @table oauth_access_tokens
     */
    public $client_id = '';

    /**
     * @var integer
     * @table oauth_access_tokens
     */
    public $user_id = null;

    /**
     * @var integer
     * @table oauth_access_tokens
     */
    public $revoked = '0';

    /**
     * @var datetime
     * @table oauth_access_tokens
     */
    public $expires = null;

    /**
     * @var datetime
     * @table oauth_access_tokens
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var datetime
     * @table oauth_access_tokens
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->accessToken = '';
        $this->scope = NULL;
        $this->clientId = '';
        $this->userId = NULL;
        $this->revoked = '0';
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
            'access_token' => 'accessToken', 
            'scope' => 'scope', 
            'client_id' => 'clientId', 
            'user_id' => 'userId', 
            'revoked' => 'revoked', 
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
        return 'oauth_access_tokens';
    }


}

