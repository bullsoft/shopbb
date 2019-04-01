<?php

namespace LightCloud\Uc\Models;

/**
 * Phalcon Model: OauthRefreshTokensModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\Uc\Models
 * @version $Rev:2019-03-30 17:43:58$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class OauthRefreshTokensModel extends ModelBase
{

    /**
     * @var integer
     * @table oauth_refresh_tokens
     */
    public $id = null;

    /**
     * @var string
     * @table oauth_refresh_tokens
     */
    public $refresh_token = '';

    /**
     * @var string
     * @table oauth_refresh_tokens
     */
    public $scope = null;

    /**
     * @var string
     * @table oauth_refresh_tokens
     */
    public $client_id = '';

    /**
     * @var integer
     * @table oauth_refresh_tokens
     */
    public $user_id = null;

    /**
     * @var integer
     * @table oauth_refresh_tokens
     */
    public $revoked = '0';

    /**
     * @var datetime
     * @table oauth_refresh_tokens
     */
    public $expires = null;

    /**
     * @var datetime
     * @table oauth_refresh_tokens
     */
    public $ctime = null;

    /**
     * @var datetime
     * @table oauth_refresh_tokens
     */
    public $mtime = null;

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
        $this->refreshToken = '';
        $this->scope = NULL;
        $this->clientId = '';
        $this->userId = NULL;
        $this->revoked = '0';
        $this->expires = NULL;
        $this->ctime = NULL;
        $this->mtime = NULL;
    }

    /**
     * Column map for database fields and model properties
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'refresh_token' => 'refreshToken', 
            'scope' => 'scope', 
            'client_id' => 'clientId', 
            'user_id' => 'userId', 
            'revoked' => 'revoked', 
            'expires' => 'expires', 
            'ctime' => 'ctime', 
            'mtime' => 'mtime', 
        );
    }

    /**
     * return related table name
     */
    public function getSource()
    {
        return 'oauth_refresh_tokens';
    }


}

