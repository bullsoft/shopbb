<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: MsgTemplateModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class MsgTemplateModel extends ModelBase
{

    /**
     * @var integer
     * @table msg_template
     */
    public $id = null;

    /**
     * @var integer
     * @table msg_template
     */
    public $tpl = null;

    /**
     * @var integer
     * @table msg_template
     */
    public $comment = null;

    /**
     * @var integer
     * @table msg_template
     */
    public $user_id = null;

    /**
     * @var integer
     * @table msg_template
     */
    public $status = null;

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->tpl = NULL;
        $this->comment = NULL;
        $this->userId = NULL;
        $this->status = NULL;
    }

    /**
     * Column map for database fields and model properties
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'tpl' => 'tpl', 
            'comment' => 'comment', 
            'user_id' => 'userId', 
            'status' => 'status', 
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
        return 'msg_template';
    }


}

