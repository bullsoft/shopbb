<?php

namespace LightCloud\CentCMS\Backend\Models;

/**
 * Phalcon Model: ContractTemplateModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace LightCloud\CentCMS\Backend\Models
 * @version $Rev:2019-10-29 15:37:50$
 * @license PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )
 */
class ContractTemplateModel extends ModelBase
{

    /**
     * @var integer
     * @table contract_template
     */
    public $id = null;

    /**
     * @var integer
     * @table contract_template
     */
    public $item_id = '0';

    /**
     * @var string
     * @table contract_template
     */
    public $variables = null;

    /**
     * @var string
     * @table contract_template
     */
    public $file_id = '';

    /**
     * @var integer
     * @table contract_template
     */
    public $status = '0';

    /**
     * @var datetime
     * @table contract_template
     */
    public $ctime = '0000-00-00 00:00:00';

    /**
     * @var datetime
     * @table contract_template
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->itemId = '0';
        $this->variables = NULL;
        $this->fileId = '';
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
            'variables' => 'variables', 
            'file_id' => 'fileId', 
            'status' => 'status', 
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
        return 'contract_template';
    }


}

