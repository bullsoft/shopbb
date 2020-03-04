<?php

namespace LightCloud\Uc\Models;

/**
 * Phalcon Model: OauthScopesModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\Uc\Models
 * @version $Rev:2019-10-30 11:25:14$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class OauthScopesModel extends ModelBase
{

    /**
     * @var integer
     * @table oauth_scopes
     */
    public $id = null;

    /**
     * @var string
     * @table oauth_scopes
     */
    public $scope = null;

    /**
     * @var integer
     * @table oauth_scopes
     */
    public $is_default = null;

    /**
     * @var datetime
     * @table oauth_scopes
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var datetime
     * @table oauth_scopes
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->scope = NULL;
        $this->isDefault = NULL;
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
            'scope' => 'scope', 
            'is_default' => 'isDefault', 
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
        return 'oauth_scopes';
    }


}

