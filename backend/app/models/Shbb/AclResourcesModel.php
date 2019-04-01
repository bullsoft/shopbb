<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: AclResourcesModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class AclResourcesModel extends ModelBase
{

    /**
     * @var string
     * @table acl_resources
     */
    public $name = null;

    /**
     * @var string
     * @table acl_resources
     */
    public $description = null;

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->name = NULL;
        $this->description = NULL;
    }

    /**
     * Column map for database fields and model properties
     */
    public function columnMap()
    {
        return array(
            'name' => 'name', 
            'description' => 'description', 
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
        return 'acl_resources';
    }


}

