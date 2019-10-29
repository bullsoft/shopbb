<?php

namespace LightCloud\CentCMS\Backend\Models;

/**
 * Phalcon Model: CategoryModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\CentCMS\Backend\Models
 * @version $Rev:2019-10-29 15:37:50$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class CategoryModel extends ModelBase
{

    /**
     * @var integer
     * @table category
     */
    public $id = null;

    /**
     * @var string
     * @table category
     */
    public $name = null;

    /**
     * @var string
     * @table category
     */
    public $desc = '';

    /**
     * @var string
     * @table category
     */
    public $identity = null;

    /**
     * @var integer
     * @table category
     */
    public $pid = null;

    /**
     * @var integer
     * @table category
     */
    public $lft = null;

    /**
     * @var integer
     * @table category
     */
    public $rgt = null;

    /**
     * @var integer
     * @table category
     */
    public $depth = null;

    /**
     * @var integer
     * @table category
     */
    public $status = '0';

    /**
     * @var integer
     * @table category
     */
    public $sort_no = '0';

    /**
     * @var integer
     * @table category
     */
    public $check_permission = '0';

    /**
     * @var integer
     * @table category
     */
    public $is_delete = '0';

    /**
     * @var datetime
     * @table category
     */
    public $ctime = '0000-00-00 00:00:00';

    /**
     * @var datetime
     * @table category
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->name = NULL;
        $this->desc = '';
        $this->identity = NULL;
        $this->pid = NULL;
        $this->lft = NULL;
        $this->rgt = NULL;
        $this->depth = NULL;
        $this->status = '0';
        $this->sortNo = '0';
        $this->checkPermission = '0';
        $this->isDelete = '0';
        $this->ctime = '0000-00-00 00:00:00';
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
            'pid' => 'pid', 
            'lft' => 'lft', 
            'rgt' => 'rgt', 
            'depth' => 'depth', 
            'status' => 'status', 
            'sort_no' => 'sortNo', 
            'check_permission' => 'checkPermission', 
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
        return 'category';
    }


}

