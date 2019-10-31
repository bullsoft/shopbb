<?php

namespace LightCloud\Uc\Models;

/**
 * Phalcon Model: OauthUserScopesModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\Uc\Models
 * @version $Rev:2019-10-30 11:25:14$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class OauthUserScopesModel extends ModelBase
{

    /**
     * @var integer
     * @table oauth_user_scopes
     */
    public $id = null;

    /**
     * @var integer
     * @table oauth_user_scopes
     */
    public $user_id = null;

    /**
     * @var integer
     * @table oauth_user_scopes
     */
    public $client_id = null;

    /**
     * @var string
     * @table oauth_user_scopes
     */
    public $scope = '';

    /**
     * @var datetime
     * @table oauth_user_scopes
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var datetime
     * @table oauth_user_scopes
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->userId = NULL;
        $this->clientId = NULL;
        $this->scope = '';
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
        return 'oauth_user_scopes';
    }


}

