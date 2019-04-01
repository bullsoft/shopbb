<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: AclResourcesAccessesModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class AclResourcesAccessesModel extends ModelBase
{

    /**
     * @var string
     * @table acl_resources_accesses
     */
    public $resources_name = null;

    /**
     * @var string
     * @table acl_resources_accesses
     */
    public $access_name = null;

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->resourcesName = NULL;
        $this->accessName = NULL;
    }

    /**
     * Column map for database fields and model properties
     */
    public function columnMap()
    {
        return array(
            'resources_name' => 'resourcesName', 
            'access_name' => 'accessName', 
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
        return 'acl_resources_accesses';
    }


}

