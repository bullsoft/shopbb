<?php

namespace LightCloud\CentCMS\Backend\Models;

/**
 * Phalcon Model: FilesModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\CentCMS\Backend\Models
 * @version $Rev:2019-10-15 19:53:38$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class FilesModel extends ModelBase
{

    /**
     * @var integer
     * @table files
     */
    public $id = null;

    /**
     * @var string
     * @table files
     */
    public $name = null;

    /**
     * @var string
     * @table files
     */
    public $path = null;

    /**
     * @var integer
     * @table files
     */
    public $size = null;

    /**
     * @var datetime
     * @table files
     */
    public $ctime = '0000-00-00 00:00:00';

    /**
     * @var datetime
     * @table files
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * @var string
     * @table files
     */
    public $create_uid = '';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->name = NULL;
        $this->path = NULL;
        $this->size = NULL;
        $this->ctime = '0000-00-00 00:00:00';
        $this->mtime = '0001-01-01 00:00:00';
        $this->createUid = '';
    }

    /**
     * Column map for database fields and model properties
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'name' => 'name', 
            'path' => 'path', 
            'size' => 'size', 
            'ctime' => 'ctime', 
            'mtime' => 'mtime', 
            'create_uid' => 'createUid', 
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
        return 'files';
    }


}

