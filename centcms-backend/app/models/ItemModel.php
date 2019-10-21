<?php

namespace LightCloud\CentCMS\Backend\Models;

/**
 * Phalcon Model: ItemModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\CentCMS\Backend\Models
 * @version $Rev:2019-10-15 19:53:38$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class ItemModel extends ModelBase
{

    /**
     * @var integer
     * @table item
     */
    public $id = null;

    /**
     * @var string
     * @table item
     */
    public $name = null;

    /**
     * @var string
     * @table item
     */
    public $desc = '';

    /**
     * @var string
     * @table item
     */
    public $identity = null;

    /**
     * @var integer
     * @table item
     */
    public $category_id = null;

    /**
     * @var integer
     * @table item
     */
    public $schema_template_id = null;

    /**
     * @var string
     * @table item
     */
    public $content = null;

    /**
     * @var integer
     * @table item
     */
    public $sort_no = '0';

    /**
     * @var integer
     * @table item
     */
    public $status = null;

    /**
     * @var integer
     * @table item
     */
    public $is_delete = '0';

    /**
     * @var datetime
     * @table item
     */
    public $ctime = '0000-00-00 00:00:00';

    /**
     * @var datetime
     * @table item
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * @var string
     * @table item
     */
    public $create_uid = '';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->name = NULL;
        $this->desc = '';
        $this->identity = NULL;
        $this->categoryId = NULL;
        $this->createUserId = '';
        $this->schemaTemplateId = NULL;
        $this->content = NULL;
        $this->sortNo = '0';
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
            'name' => 'name', 
            'desc' => 'desc', 
            'identity' => 'identity', 
            'category_id' => 'categoryId', 
            'create_user_id' => 'createUserId', 
            'schema_template_id' => 'schemaTemplateId', 
            'content' => 'content', 
            'sort_no' => 'sortNo', 
            'status' => 'status', 
            'is_delete' => 'isDelete', 
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
        return 'item';
    }


}

