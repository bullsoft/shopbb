<?php

namespace LightCloud\CentCMS\Backend\Services;

use PhalconPlus\Base\SimpleRequest as SimpleRequest;
use LightCloud\CentCMS\Backend\Repositories\ItemRepository;
use LightCloud\Com\Protos\CentCMS\Schemas\RequestItemList;
use LightCloud\CentCMS\Backend\Repositories\CategoryRepository;
use LightCloud\Com\Protos\CentCMS\Enums\CategoryStatus;


class ItemService extends \PhalconPlus\Base\Service
{
    public function getItemList(RequestItemList $request)
    {
        $data = $request->validate();
        
        $categoryId = $data->getCategoryId();
        $name = $data->getName();
        $pagealbe = $data->getPageable();

        try {
            $cateRepo = new CategoryRepository();
            $categoryList = $cateRepo->getChildren($categoryId, 2, [CategoryStatus::PUBLISHED], true);
            if (empty($categoryList)) {
                return [];
            }
            $categoryIds = [];
            $categoryMap = [];
            foreach ($categoryList as $item) {
                $categoryIds[] = $item['id'];
                $categoryMap[$item['id']] = $item['name'];
            }

            $repo = new ItemRepository();
            return $repo->getItemList($categoryIds, $name, $pagealbe);
            // return ["page" => $result, "categoryMap" => $categoryMap];
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
