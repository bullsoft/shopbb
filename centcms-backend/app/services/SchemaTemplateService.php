<?php

namespace LightCloud\CentCMS\Backend\Services;
use PhalconPlus\Base\SimpleRequest as SimpleRequest;

use PhalconPlus\Assert\Assertion as Assert;
use LightCloud\CentCMS\Backend\Repositories\SchemaTemplateRepository;

use LightCloud\Com\Protos\CentCMS\Schemas\RequestSchemaTemplateList;
use LightCloud\Com\Protos\CentCMS\Enums\SchemaTemplateStatus;

class SchemaTemplateService extends \PhalconPlus\Base\Service
{
    public function getSchemaTemplateListPageable(RequestSchemaTemplateList $request) : \PhalconPlus\Base\Page
    {
        $data = $request->validate();
        $name = $data->getName();
        $pagealbe = $data->getPageable();
        $createUserId = $data->getCreateUserId();
        try {
            $repo = new SchemaTemplateRepository();
            return $repo->getSchemaTemplateListPageable($pagealbe, $name, $createUserId);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function getSchemaTemplateList(SimpleRequest $request) : array
    {
        $status = $request->getParam("status");
        if(!is_null($status)) {
            Assert::integer($status);
            Assert::inArray($status, SchemaTemplateStatus::getValues());
        }
        $repo = new SchemaTemplateRepository();
        return $repo->getAllSchemaTemplateList($status);
    }

    public function getSchemaTemplateDetail(SimpleRequest $request) : array
    {
        $schemaTemplateId = $request->getParam('schemaTemplateId');
        $createUserId = $request->getParam('createUserId');

        Assert::integer($schemaTemplateId);
        Assert::min($schemaTemplateId, 1);
 
        $repo = new SchemaTemplateRepository();
        return $repo->getSchemaTemplateById($schemaTemplateId, $createUserId);
    }

    public function addSchemaTemplate(SchemaTemplate $request): int
    {
        $data = $request->validate();
        Assert::isJsonString($data->getContent());
        $status = $data->getStatus();
        $miniContent = json_encode(json_decode($data->getContent()), \JSON_UNESCAPED_UNICODE);
        $repo = new SchemaTemplateRepository();
        return $repo->addSchemaTemplate([
            "name"         => $data->getName(),
            "identity"     => $data->getIdentity(),
            "content"      => $miniContent,
            "desc"         => $data->getDesc(),
            "createUserId" => $data->getCreateUserId(),
            "status"       => is_null($status) ? SchemaTemplateStatus::STATUS_NO_RELEASE : (new SchemaTemplateStatus($status))->getValue(),
        ]);
    }
}
