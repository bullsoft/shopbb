<?php
namespace BullSoft\TuShare;

class Params
{
    protected $apiName = "";
    protected $params = [];
    protected $fields = [];

    public function __construct(string $apiName)
    {
        $this->apiName = $apiName;
    }

    public function getApiName()
    {
        return $this->apiName;
    }

    public function addParam(string $key, $val)
    {  
        $this->params[$key] = $val;
        return $this;
    }

    public function setParams(array $params)
    {
        $this->params = $params;
        return $this;
    }
    
    public function getParams()
    {
        return $this->params;
    }

    public function addField(string $field)
    {
        $this->fields[] = $field;
        return $this;
    }

    public function setFields(array $fields)
    {
        $this->fields = $fields;
        return $this;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function getFieldsAsString()
    {
        return implode(",", $this->fields);
    }
}