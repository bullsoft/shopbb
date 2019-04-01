<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: AclRolesInheritsModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class AclRolesInheritsModel extends ModelBase
{

    /**
     * @var string
     * @table acl_roles_inherits
     */
    public $roles_name = null;

    /**
     * @var string
     * @table acl_roles_inherits
     */
    public $roles_inherit = null;

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->rolesName = NULL;
        $this->rolesInherit = NULL;
    }

    /**
     * Column map for database fields and model properties
     */
    public function columnMap()
    {
        return array(
            'roles_name' => 'rolesName', 
            'roles_inherit' => 'rolesInherit', 
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
        return 'acl_roles_inherits';
    }


}

