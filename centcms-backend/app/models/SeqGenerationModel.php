<?php

namespace LightCloud\CentCMS\Backend\Models;

/**
 * Phalcon Model: SeqGenerationModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\CentCMS\Backend\Models
 * @version $Rev:2019-10-29 15:37:50$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class SeqGenerationModel extends ModelBase
{

    /**
     * @var integer
     * @table seq_generation
     */
    public $id = null;

    /**
     * @var string
     * @table seq_generation
     */
    public $app = '';

    /**
     * @var string
     * @table seq_generation
     */
    public $bucket = '';

    /**
     * @var integer
     * @table seq_generation
     */
    public $seq = null;

    /**
     * @var integer
     * @table seq_generation
     */
    public $step = null;

    /**
     * @var integer
     * @table seq_generation
     */
    public $max_value = null;

    /**
     * @var integer
     * @table seq_generation
     */
    public $min_value = null;

    /**
     * @var integer
     * @table seq_generation
     */
    public $cycle = '0';

    /**
     * @var datetime
     * @table seq_generation
     */
    public $ctime = '0000-00-00 00:00:00';

    /**
     * @var datetime
     * @table seq_generation
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->app = '';
        $this->bucket = '';
        $this->seq = NULL;
        $this->step = NULL;
        $this->maxValue = NULL;
        $this->minValue = NULL;
        $this->cycle = '0';
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
            'app' => 'app', 
            'bucket' => 'bucket', 
            'seq' => 'seq', 
            'step' => 'step', 
            'max_value' => 'maxValue', 
            'min_value' => 'minValue', 
            'cycle' => 'cycle', 
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
        return 'seq_generation';
    }


}

