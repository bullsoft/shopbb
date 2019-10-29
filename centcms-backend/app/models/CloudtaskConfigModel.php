<?php

namespace LightCloud\CentCMS\Backend\Models;

/**
 * Phalcon Model: CloudtaskConfigModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\CentCMS\Backend\Models
 * @version $Rev:2019-10-29 15:37:50$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class CloudtaskConfigModel extends ModelBase
{

    /**
     * @var integer
     * @table cloudtask_config
     */
    public $id = null;

    /**
     * @var string
     * @table cloudtask_config
     */
    public $class_name = '';

    /**
     * @var string
     * @table cloudtask_config
     */
    public $runtimes = '';

    /**
     * @var string
     * @table cloudtask_config
     */
    public $path = '';

    /**
     * @var string
     * @table cloudtask_config
     */
    public $command = '';

    /**
     * @var string
     * @table cloudtask_config
     */
    public $script = '';

    /**
     * @var string
     * @table cloudtask_config
     */
    public $regular_param = '';

    /**
     * @var datetime
     * @table cloudtask_config
     */
    public $ctime = '0000-00-00 00:00:00';

    /**
     * @var datetime
     * @table cloudtask_config
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->className = '';
        $this->runtimes = '';
        $this->path = '';
        $this->command = '';
        $this->script = '';
        $this->regularParam = '';
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
            'class_name' => 'className', 
            'runtimes' => 'runtimes', 
            'path' => 'path', 
            'command' => 'command', 
            'script' => 'script', 
            'regular_param' => 'regularParam', 
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
        return 'cloudtask_config';
    }


}

