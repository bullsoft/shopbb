<?php

namespace LightCloud\CentCMS\Backend\Models;

/**
 * Phalcon Model: SchemaTemplateModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\CentCMS\Backend\Models
 * @version $Rev:2019-10-29 15:37:50$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class SchemaTemplateModel extends ModelBase
{

    /**
     * @var integer
     * @table schema_template
     */
    public $id = null;

    /**
     * @var string
     * @table schema_template
     */
    public $identity = null;

    /**
     * @var string
     * @table schema_template
     */
    public $content = null;

    /**
     * @var string
     * @table schema_template
     */
    public $name = null;

    /**
     * @var string
     * @table schema_template
     */
    public $create_user_id = '';

    /**
     * @var string
     * @table schema_template
     */
    public $desc = '';

    /**
     * @var integer
     * @table schema_template
     */
    public $status = null;

    /**
     * @var integer
     * @table schema_template
     */
    public $is_delete = '0';

    /**
     * @var datetime
     * @table schema_template
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var datetime
     * @table schema_template
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->identity = NULL;
        $this->content = NULL;
        $this->name = NULL;
        $this->createUserId = '';
        $this->desc = '';
        $this->status = NULL;
        $this->isDelete = '0';
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
            'identity' => 'identity', 
            'content' => 'content', 
            'name' => 'name', 
            'create_user_id' => 'createUserId', 
            'desc' => 'desc', 
            'status' => 'status', 
            'is_delete' => 'isDelete', 
            'ctime' => 'ctime', 
            'mtime' => 'mtime', 
        );
    }

    public function initialize()
    {
        parent::initialize();
        $this->setWriteConnectionService("dbCms");
        $this->setReadConnectionService("dbCmsRead");
    }

    /**
     * return related table name
     */
    public function getSource() : string
    {
        return 'schema_template';
    }


}

