<?php

namespace LightCloud\CentCMS\Api\Controllers;

use PhalconPlus\Assert\Assertion as Assert;
use PhalconPlus\Base\{
    SimpleResponse,
    SimpleRequest
};
use LightCloud\Com\Protos\CentCMS\Schemas\{
    Pageable,
    Id,
    Category as CategorySchema,
};

use LightCloud\Com\Protos\CentCMS\Enums\CategoryStatus;

use GuzzleHttp\Client as HttpClient;

class CategoryController extends \Phalcon\Mvc\Controller
{
    public function addCategoryAction()
    {
        $name = trim($this->request->getPost('name', 'string'));
        $parentId = (int) $this->request->getPost('parentId', 'int');
        $identity = trim($this->request->getPost('identity', 'string'));

        Assert::minLength($name, 2);
        Assert::min($parentId, 1);
        Assert::betweenLength($identity, 4, 32);

        $desc = trim($this->request->getPost('desc', 'string'));
        $status = $this->request->getPost('status', 'int');
        $sortNo = $this->request->getPost('sortNo', 'int');

        $request = new CategorySchema();
        $request->setName($name);
        $request->setParentId($parentId);
        $request->setIdentity($identity);
        $request->setDesc($desc);

        if (!is_null($status)) {
            Assert::integer($status);
            $request->setStatus($status);
        }
        if (!is_null($sortNo)) {
            Assert::integer($sortNo);
            $request->setSortNo($sortNo);
        }

        $result = $this->rpc->callByObject([
            'service' => 'LightCloud\CentCMS\Backend\Services\Category',
            'method'  => 'addCategory',
            'args'    => $request,
            'logId'   => $this->logger->getProcessorVar("logId"),
        ]);

        return (new SimpleResponse())->setItem($result, "categoryId");
    }

    public function getTopCategoryAction()
    {
        $request = new SimpleRequest();
        $response = $this->rpc->callByObject([
            'service' => 'LightCloud\CentCMS\Backend\Services\Category',
            'method' => 'getTopCategory',
            'args' => $request,
            'logId'   => $this->logger->getProcessorVar("logId"),
        ]);

        return response;
    }

    public function getCategoryListAction()
    {
        $categoryId = (int) $this->request->get('categoryId', 'int', -1);
        $backward = (bool) $this->request->get('backward', 'int', 1);
        $onlyDirectChild = (int) $this->request->get('onlyDirectChild', 'int', 0);
        $status = (int) $this->request->get('status', 'int', CategoryStatus::PUBLISHED);

        $request = new SimpleRequest();
        $request->setParam($categoryId, 'id');
        $request->setParam($backward, 'backward');
        if ($onlyDirectChild != 1) {
            $request->setParam(20, 'depth');
        }
        $request->setParam($status, 'status');
        $response = $this->rpc->callByObject([
            'service' => 'LightCloud\CentCMS\Backend\Services\Category',
            'method'  => 'getChildrenList',
            'args'    => $request,
            'logId'   => $this->logger->getProcessorVar("logId"),
        ]);
        return $response;
    }

    public function getCategoryPageableAction()
    {
        $categoryId = (int) $this->request->get('categoryId');
        $backward = (bool) $this->request->get('backward', 'int', 1);
        $name = trim($this->request->get('name'));
        $pageNo = (int) $this->request->get('pageNo', 'int', 1);
        $pageSize = (int) $this->request->get('pageSize', 'int', 30);

        $request = new SimpleRequest();
        $request->setParam($categoryId, "id");
        $request->setParam($backward, "backward");
        $request->setParam($name, "name");
        $request->setParam(new Pageable($pageNo, $pageSize), "pageable");
        $response = $this->rpc->callByObject([
            'service' => 'LightCloud\CentCMS\Backend\Services\Category',
            'method'  => 'getChildrenList',
            'args'    => $request,
            'logId'   => $this->logger->getProcessorVar("logId"),
        ]);
        return $response;
    }

    public function getCategoryDetailAction()
    {
        $categoryId = (int) $this->request->get('categoryId');
        Assert::integer($categoryId);
        Assert::min($categoryId, 1);
        $request = new Id();
        $request->setId($categoryId);
        $response = $this->rpc->callByObject([
            'service' => 'LightCloud\CentCMS\Backend\Services\Category',
            'method'  => 'getCategoryDetail',
            'args'    => $request,
            'logId'   => $this->logger->getProcessorVar("logId"),
        ]);
        return $response;
    }

    // 获取某个类型最新的数据
    public function getLatestDataAction()
    {
        $categoryIdentity = $this->request->get('categoryIdentity');
        Assert::isString($categoryIdentity);
        Assert::minLength($categoryIdentity, 4);

        $request = new SimpleRequest();
        $request->setParam($categoryIdentity, 'identity');
        $response = $this->rpc->callByObject([
            'service' => 'LightCloud\CentCMS\Backend\Services\Category',
            'method'  => 'getLatestDataByCategoryIdentity',
            'args'    => $request,
            'logId'   => $this->logger->getProcessorVar("logId"),
        ]);
        return $response;
     
    }

    // 获取某个分类下的所有数据带分页
    public function getDataByCategoryPageableAction()
    {
        $client = new HttpClient([
            'base_uri' => 'http://127.0.0.1:8086',
            'timeout'  => 2.0,
        ]);
        $response = $client->request('POST', '/oauth/access-token/validate', [
            'form_params' => [
                'scope' => 'user',
                'accessToken' => $this->request->getPost("accessToken"),
            ]
        ]);
        $json = json_decode($response->getBody()->getContents(), true);
        Assert::eq($json['errorCode'], 0);
        Assert::eq($json['data']['access'], true);
           

        $categoryIdentity = $this->request->get('categoryIdentity');
        $pageNo = (int) $this->request->get('pageNo', 'int', 1);
        $pageSize = (int) $this->request->get('pageSize', 'int', 30);

        Assert::isString($categoryIdentity);
        Assert::min($pageNo, 1);
        Assert::min($pageSize, 1);

        $pageNo = min(1, $pageNo);
        $pageSize = min(30, $pageSize);

        $request = new SimpleRequest();
        $request->setParam($categoryIdentity, 'identity');
        $request->setParam(new Pageable($pageNo, $pageSize), 'pageable');
        $response = $this->rpc->callByObject([
            'service' => 'LightCloud\CentCMS\Backend\Services\Category',
            'method'  => 'getDataByCategoryPageable',
            'args'    => $request
        ]);
        return $response;
     
    }
}
