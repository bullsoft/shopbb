<?php

namespace ShBB\Backend\Models\Shbb;

/**
 * Phalcon Model: PayProviderModel
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace ShBB\Backend\Models\Shbb
 * @version $Rev:2018-04-18 16:15:23$
 * @license PhalconPlus( http://plus.phalconphp.org/license-1.0.html )
 */
class PayProviderModel extends ModelBase
{

    /**
     * @var integer
     * @table pay_provider
     */
    public $id = null;

    /**
     * @var string
     * @table pay_provider
     */
    public $name = '';

    /**
     * @var string
     * @table pay_provider
     */
    public $code = '';

    /**
     * @var string
     * @table pay_provider
     */
    public $logo_url = '';

    /**
     * @var string
     * @table pay_provider
     */
    public $website = null;

    /**
     * @var string
     * @table pay_provider
     */
    public $partner_id = null;

    /**
     * @var string
     * @table pay_provider
     */
    public $ak = null;

    /**
     * @var string
     * @table pay_provider
     */
    public $sk = null;

    /**
     * @var unknown
     * @table pay_provider
     */
    public $ctime = '0001-01-01 00:00:00';

    /**
     * @var unknown
     * @table pay_provider
     */
    public $mtime = '0001-01-01 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->name = '';
        $this->code = '';
        $this->logoUrl = '';
        $this->website = NULL;
        $this->partnerId = NULL;
        $this->ak = NULL;
        $this->sk = NULL;
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
            'code' => 'code', 
            'logo_url' => 'logoUrl', 
            'website' => 'website', 
            'partner_id' => 'partnerId', 
            'ak' => 'ak', 
            'sk' => 'sk', 
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
        return 'pay_provider';
    }


}

