<?php

namespace LightCloud\CentCMS\Backend\Models;

/**
 * Phalcon Model: ScheduleJobModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\CentCMS\Backend\Models
 * @version $Rev:2019-10-15 19:53:38$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class ScheduleJobModel extends ModelBase
{

    /**
     * @var integer
     * @table schedule_job
     */
    public $id = null;

    /**
     * @var string
     * @table schedule_job
     */
    public $item_id = '';

    /**
     * @var string
     * @table schedule_job
     */
    public $item_action = '';

    /**
     * @var string
     * @table schedule_job
     */
    public $cmd = '';

    /**
     * @var string
     * @table schedule_job
     */
    public $schedule = null;

    /**
     * @var string
     * @table schedule_job
     */
    public $job_name = '';

    /**
     * @var string
     * @table schedule_job
     */
    public $job_id = '';

    /**
     * @var integer
     * @table schedule_job
     */
    public $status = '0';

    /**
     * @var datetime
     * @table schedule_job
     */
    public $ctime = '0000-00-00 00:00:00';

    /**
     * @var datetime
     * @table schedule_job
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->itemId = '';
        $this->itemAction = '';
        $this->cmd = '';
        $this->schedule = NULL;
        $this->jobName = '';
        $this->jobId = '';
        $this->status = '0';
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
            'item_id' => 'itemId', 
            'item_action' => 'itemAction', 
            'cmd' => 'cmd', 
            'schedule' => 'schedule', 
            'job_name' => 'jobName', 
            'job_id' => 'jobId', 
            'status' => 'status', 
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
        return 'schedule_job';
    }


}

