<?php

namespace LightCloud\Uc\Models;

/**
 * Phalcon Model: OauthClientsModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\Uc\Models
 * @version $Rev:2019-10-30 11:25:14$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class OauthClientsModel extends ModelBase
{

    /**
     * @var integer
     * @table oauth_clients
     */
    public $id = null;

    /**
     * @var string
     * @table oauth_clients
     */
    public $name = null;

    /**
     * @var string
     * @table oauth_clients
     */
    public $client_secret = null;

    /**
     * @var string
     * @table oauth_clients
     */
    public $redirect_uri = null;

    /**
     * @var string
     * @table oauth_clients
     */
    public $grant_types = null;

    /**
     * @var string
     * @table oauth_clients
     */
    public $scope = null;

    /**
     * @var integer
     * @table oauth_clients
     */
    public $user_id = null;

    /**
     * @var datetime
     * @table oauth_clients
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var datetime
     * @table oauth_clients
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->name = NULL;
        $this->clientSecret = NULL;
        $this->redirectUri = NULL;
        $this->grantTypes = NULL;
        $this->scope = NULL;
        $this->userId = NULL;
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
            'client_secret' => 'clientSecret', 
            'redirect_uri' => 'redirectUri', 
            'grant_types' => 'grantTypes', 
            'scope' => 'scope', 
            'user_id' => 'userId', 
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
        return 'oauth_clients';
    }


}

