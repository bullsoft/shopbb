<?php

namespace LightCloud\CentCMS\Api\Controllers;
use PhalconPlus\Base\SimpleRequest as SimpleRequest;
use PhalconPlus\Assert\Assertion as Assert;
use LightCloud\Com\Protos\CentCMS\Enums\SchemaTemplateStatus;
use LightCloud\Com\Protos\CentCMS\Schemas\{
    Pageable,
    RequestSchemaTemplateList,
    Id,
};

class SchemaTemplateController extends \Phalcon\Mvc\Controller
{
    public function getSchemaTemplateListPageableAction()
    {
        $name = trim($this->request->getPost('name', 'string', ''));
        $pageNo = (int) $this->request->getPost('pageNo', 'int', 1);
        $pageSize = (int) $this->request->getPost('pageSize', 'int', 20);    

        $request = new RequestSchemaTemplateList();
        $request->setPageable(new Pageable($pageNo, $pageSize));

        if(!empty($name)) {
            $request->setName($name);
        }

        $response = $this->rpc->callByObject([
            'service' => 'LightCloud\CentCMS\Backend\Services\SchemaTemplate',
            'method'  => 'getSchemaTemplateListPageable',
            'args'    => $request,
            'logId'   => $this->logger->getProcessorVar("logId"),
        ]);
        return $response;
    }

    public function getSchemaTemplateListAction()
    {
        $request = new SimpleRequest();
        $status = $this->request->get("status", "int");
        if(!is_null($status)) {
            Assert::notBlank($status);
            $request->setParam(intval($status), "status");
        }
        $response = $this->rpc->callByObject([
            'service' => 'LightCloud\CentCMS\Backend\Services\SchemaTemplate',
            'method'  => 'getSchemaTemplateList',
            'args'    => $request,
            'logId'   => $this->logger->getProcessorVar("logId"),
        ]);
        return $response;
    }


    public function getSchemaTemplateDetailAction()
    {
        $schemaTemplateId = (int) $this->request->get('schemaTemplateId', "int");
        $request = new SimpleRequest();
        $request->setParam($schemaTemplateId, "schemaTemplateId");
        $response = $this->rpc->callByObject([
            'service' => 'LightCloud\CentCMS\Backend\Services\SchemaTemplate',
            'method'  => 'getSchemaTemplateDetail',
            'args'    => $request,
            'logId'   => $this->logger->getProcessorVar("logId"),
        ]);
        return $response;
    }
}
