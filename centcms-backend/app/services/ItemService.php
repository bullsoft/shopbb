<?php

namespace LightCloud\CentCMS\Backend\Services;

use PhalconPlus\Base\SimpleRequest as SimpleRequest;
use PhalconPlus\Assert\Assertion as Assert;
use Opis\JsonSchema\{
    Validator,
    ValidationResult,
    ValidationError,
    Schema
};
use LightCloud\CentCMS\Backend\Repositories\{
    ItemRepository,
    CategoryRepository,
};
use LightCloud\Com\Protos\CentCMS\Schemas\{
    RequestItemList,
    Item as ItemSchema,
    Pageable,
};
use LightCloud\Com\Protos\CentCMS\Enums\{
    CategoryStatus,
    ItemStatus,
};
use LightCloud\CentCMS\Backend\Models\SchemaTemplateModel;


class ItemService extends \PhalconPlus\Base\Service
{
    public function addItem(ItemSchema $request) : int
    {
        $item = $request->validate();

        Assert::isJsonString($item->getContent());
        $data = json_decode($item->getContent());

        $templateId = $item->getSchemaTemplateId();
        $templateSchema = SchemaTemplateModel::findFirst($templateId);
        if (!$templateSchema) {
            throw new \Exception("模板 {$templateId} 不存在");
        }

        $contentObj = json_decode($templateSchema->content);
        $schemaObj = new Schema($contentObj->schema);
        /** @var ValidationResult $result */
        $result = (new Validator())->schemaValidation($data, $schemaObj);

        if ($result->isValid()) {
            $repo = new ItemRepository();
            $ret = $repo->addItem([
                "name"             => $item->getName(),
                "categoryId"       => $item->getCategoryId(),
                "identity"         => $item->getIdentity(),
                "schemaTemplateId" => $item->getSchemaTemplateId(),
                "content"          => $item->getContent(),
                "status"           => is_null($item->getStatus()) ? ItemStatus::STATUS_NO_RELEASE : (new ItemStatus($item->getStatus()))->getValue(),
                "createUserId"     => $item->getCreateUserId(),
                "sortNo"           => $item->getSortNo() ?: 0,
                "desc"             => $item->getDesc(),
            ]);
            return $ret;
        } else {
            /** @var ValidationError $error */
            $error = $result->getFirstError();
            $msg = '$data is invalid. ';
            $msg .= "Error: " . $error->keyword();
            $msg .= json_encode($error->keywordArgs(), JSON_PRETTY_PRINT);
            throw new \Exception($msg);
        }
    }

    public function getItemList(RequestItemList $request) : \PhalconPlus\Base\Page
    {
        $data = $request->validate();
        $categoryId = $data->getCategoryId();
        $name = $data->getName();
        $pageable = $data->getPageable();

        try {
            $cateRepo = new CategoryRepository();
            $categoryList = $cateRepo->getChildren($categoryId, 2, [CategoryStatus::PUBLISHED], true);
            if (empty($categoryList)) {
                return [];
            }
            $categoryIds = array_column($categoryList, "id");
            $repo = new ItemRepository();
            return $repo->getItemList($pageable, $categoryIds, $name);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function getItemDetail(SimpleRequest $request) : array
    {
        $id = $request->getParam("id");
        Assert::notEmpty($id, "id不能为空!");
        Assert::integer($id, "id必须是数字!");

        $repo = new ItemRepository();
        return $repo->getItemById($id);
    }

    public function getAllDirectItemList(SimpleRequest $request) : \PhalconPlus\Base\Page
    {
        $categoryId = $request->getParam("categoryId");
        Assert::notEmpty($categoryId, "分类id不能为空!");
        Assert::integer($categoryId, "分类id必须是数字!");
        $pageable = (new Pageable())->setPageSize(10000);
        $repo = new ItemRepository();
        return $repo->getItemList($pageable, [$categoryId]);
    }
}
