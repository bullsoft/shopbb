<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: CategoryFieldModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class CategoryFieldModel extends ModelBase
{

    /**
     * @var integer
     * @table category_field
     */
    public $id = null;

    /**
     * @var string
     * @table category_field
     */
    public $display_name = null;

    /**
     * @var integer
     * @table category_field
     */
    public $cate_id = null;

    /**
     * @var string
     * @table category_field
     */
    public $field_name = null;

    /**
     * @var string
     * @table category_field
     */
    public $field_desc = null;

    /**
     * @var string
     * @table category_field
     */
    public $value_type = null;

    /**
     * @var integer
     * @table category_field
     */
    public $value_length = null;

    /**
     * @var string
     * @table category_field
     */
    public $input_type = null;

    /**
     * @var string
     * @table category_field
     */
    public $default_value = null;

    /**
     * @var integer
     * @table category_field
     */
    public $is_required = null;

    /**
     * @var integer
     * @table category_field
     */
    public $is_show = null;

    /**
     * @var integer
     * @table category_field
     */
    public $display_order = null;

    /**
     * @var unknown
     * @table category_field
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table category_field
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->displayName = NULL;
        $this->cateId = NULL;
        $this->fieldName = NULL;
        $this->fieldDesc = NULL;
        $this->valueType = NULL;
        $this->valueLength = NULL;
        $this->inputType = NULL;
        $this->defaultValue = NULL;
        $this->isRequired = NULL;
        $this->isShow = NULL;
        $this->displayOrder = NULL;
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
            'display_name' => 'displayName', 
            'cate_id' => 'cateId', 
            'field_name' => 'fieldName', 
            'field_desc' => 'fieldDesc', 
            'value_type' => 'valueType', 
            'value_length' => 'valueLength', 
            'input_type' => 'inputType', 
            'default_value' => 'defaultValue', 
            'is_required' => 'isRequired', 
            'is_show' => 'isShow', 
            'display_order' => 'displayOrder', 
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
    public function getSource()
    {
        return 'category_field';
    }


}

