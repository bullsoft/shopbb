<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: MsgProviderModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class MsgProviderModel extends ModelBase
{

    /**
     * @var integer
     * @table msg_provider
     */
    public $id = null;

    /**
     * @var integer
     * @table msg_provider
     */
    public $name = null;

    /**
     * @var integer
     * @table msg_provider
     */
    public $url = null;

    /**
     * @var integer
     * @table msg_provider
     */
    public $user = null;

    /**
     * @var integer
     * @table msg_provider
     */
    public $passwd = null;

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->name = NULL;
        $this->url = NULL;
        $this->user = NULL;
        $this->passwd = NULL;
    }

    /**
     * Column map for database fields and model properties
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'name' => 'name', 
            'url' => 'url', 
            'user' => 'user', 
            'passwd' => 'passwd', 
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
        return 'msg_provider';
    }


}

