<?php
namespace LightCloud\CentCMS\Api\Controllers;
use PhalconPlus\Assert\Assertion as Assert;
use PhalconPlus\Base\SimpleResponse;

use LightCloud\Com\Protos\CentCMS\Schemas\{
    Pageable,
    RequestItemList,
    Id,
    Item as ItemSchema,
};

class ItemController extends \Phalcon\Mvc\Controller
{
    public function getItemListAction()
    {
        $categoryId = (int) $this->request->getPost('categoryId', "int", 0);   
        $name = trim($this->request->getPost('name', 'string', ''));
        $pageNo = (int) $this->request->getPost('pageNo', 'int', 1);
        $pageSize = (int) $this->request->getPost('pageSize', 'int', 10);

        $pageable = (new Pageable())->setPageSize($pageSize)
                                    ->setPageNo($pageNo);
        $request = new RequestItemList();
        $request->setCategoryId($categoryId);
        if(!empty($name)) {
            $request->setName($name);
        }
        $request->setPageable($pageable);

        $response = $this->rpc->callByObject([
            'service' => 'LightCloud\CentCMS\Backend\Services\Item',
            'method'  => 'getItemList',
            'args'    => $request,
            'logId'   => $this->logger->getProcessorVar("logId"),
        ]);

        return $response;
    }

    public function getItemDetailAction()
    {
        $itemId = (int) $this->request->get('itemId', "int");
        $request = new Id();
        $request->setId($itemId);
        $response = $this->rpc->callByObject([
            'service' => 'LightCloud\CentCMS\Backend\Services\Item',
            'method'  => 'getItemDetail',
            'args'    => $request,
            'logId'   => $this->logger->getProcessorVar("logId"),
        ]);
        return $response;
    }

    public function addItemAction()
    {
        $name = trim($this->request->getPost('name'));
        $categoryId = (int)$this->request->getPost('categoryId');
        $identity = trim($this->request->getPost('identity'));
        $schemaTemplateId = (int)$this->request->getPost('schemaTemplateId');
        $content = trim($this->request->getPost('content'));
        // $enableSchedule = (int)$this->request->getPost('enableSchedule');
        // $schedule = trim($this->request->getPost('schedule'));

        Assert::notEmpty($name);
        Assert::minLength($name, 6);
        Assert::min($categoryId, 1);
        Assert::notEmpty($identity);
        Assert::minLength($identity, 4);
        Assert::min($schemaTemplateId, 1);
        Assert::isJsonString($content);

        $request = new ItemSchema();

        $request->setName($name);
        $request->setCategoryId($categoryId);
        $request->setIdentity($identity);
        $request->setSchemaTemplateId($schemaTemplateId);
        $request->setCreateUserId(1); // mock user
        $request->setContent($content);

        $desc = $this->request->getPost('desc');
        $status = $this->request->getPost('status');
        $sortNo = $this->request->getPost('sortNo');
        if(!is_null($status)) {
            Assert::numeric($status);
            $request->setStatus(intval($status));
        }
        if(!is_null($sortNo)) {
            Assert::numeric($sortNo);
            $request->setSortNo($sortNo);
        }
        $request->setDesc($desc);
        
        $result = $this->rpc->callByObject([
            'service' => 'LightCloud\CentCMS\Backend\Services\Item',
            'method'  => 'addItem',
            'args'    => $request,
            'logId'   => $this->logger->getProcessorVar("logId"),
        ]);
        return (new SimpleResponse())->setItem($result, "itemId");
    }
}