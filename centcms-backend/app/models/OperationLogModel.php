<?php

namespace LightCloud\CentCMS\Backend\Models;

/**
 * Phalcon Model: OperationLogModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\CentCMS\Backend\Models
 * @version $Rev:2019-10-29 15:37:50$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class OperationLogModel extends ModelBase
{

    /**
     * @var integer
     * @table operation_log
     */
    public $id = null;

    /**
     * @var string
     * @table operation_log
     */
    public $username = null;

    /**
     * @var string
     * @table operation_log
     */
    public $userId = null;

    /**
     * @var string
     * @table operation_log
     */
    public $tablename = null;

    /**
     * @var string
     * @table operation_log
     */
    public $tableid = null;

    /**
     * @var string
     * @table operation_log
     */
    public $type = null;

    /**
     * @var string
     * @table operation_log
     */
    public $before_change = null;

    /**
     * @var string
     * @table operation_log
     */
    public $after_change = null;

    /**
     * @var datetime
     * @table operation_log
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var datetime
     * @table operation_log
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->username = NULL;
        $this->userId = NULL;
        $this->tablename = NULL;
        $this->tableid = NULL;
        $this->type = NULL;
        $this->beforeChange = NULL;
        $this->afterChange = NULL;
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
            'username' => 'username', 
            'userId' => 'userId', 
            'tablename' => 'tablename', 
            'tableid' => 'tableid', 
            'type' => 'type', 
            'before_change' => 'beforeChange', 
            'after_change' => 'afterChange', 
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
        return 'operation_log';
    }


}

