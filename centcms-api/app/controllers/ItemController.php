<?php
namespace LightCloud\CentCMS\Api\Controllers;
use LightCloud\Com\Protos\CentCMS\Schemas\{
    Pageable,
    RequestItemList,
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
}