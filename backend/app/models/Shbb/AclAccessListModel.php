<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: AclAccessListModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class AclAccessListModel extends ModelBase
{

    /**
     * @var string
     * @table acl_access_list
     */
    public $roles_name = null;

    /**
     * @var string
     * @table acl_access_list
     */
    public $resources_name = null;

    /**
     * @var string
     * @table acl_access_list
     */
    public $access_name = null;

    /**
     * @var integer
     * @table acl_access_list
     */
    public $allowed = null;

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->rolesName = NULL;
        $this->resourcesName = NULL;
        $this->accessName = NULL;
        $this->allowed = NULL;
    }

    /**
     * Column map for database fields and model properties
     */
    public function columnMap()
    {
        return array(
            'roles_name' => 'rolesName', 
            'resources_name' => 'resourcesName', 
            'access_name' => 'accessName', 
            'allowed' => 'allowed', 
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
        return 'acl_access_list';
    }


}

