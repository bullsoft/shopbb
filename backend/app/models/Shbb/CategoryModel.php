<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: CategoryModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
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
     * @var string
     * @table category
     */
    public $slug = null;

    /**
     * @var integer
     * @table category
     */
    public $depth = null;

    /**
     * @var unknown
     * @table category
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
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
        $this->pid = NULL;
        $this->lft = NULL;
        $this->rgt = NULL;
        $this->slug = NULL;
        $this->depth = NULL;
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
            'pid' => 'pid', 
            'lft' => 'lft', 
            'rgt' => 'rgt', 
            'slug' => 'slug', 
            'depth' => 'depth', 
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
        return 'category';
    }


}

