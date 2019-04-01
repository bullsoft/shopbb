<?php

namespace LightCloud\Uc\Models;

/**
 * Phalcon Model: OauthScopesModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\Uc\Models
 * @version $Rev:2019-03-30 17:43:58$
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
    public $ctime = null;

    /**
     * @var datetime
     * @table oauth_scopes
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
        $this->scope = NULL;
        $this->isDefault = NULL;
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
            'scope' => 'scope', 
            'is_default' => 'isDefault', 
            'ctime' => 'ctime', 
            'mtime' => 'mtime', 
        );
    }

    /**
     * return related table name
     */
    public function getSource()
    {
        return 'oauth_scopes';
    }


}

