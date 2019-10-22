<?php

namespace LightCloud\CentCMS\Backend\Repositories;

use LightCloud\CentCMS\Backend\Models\ItemModel;
use LightCloud\Com\Protos\CentCMS\Schemas\Pageable;
use LightCloud\Com\Protos\CentCMS\Enums\ItemStatus;
use PhalconPlus\Assert\Assertion as Assert;

class ItemRepository
{
    public function addItem(array $data): int
    {
        Assert::notEmpty($data);
        
        $item = new ItemModel();
        $item->assign($data);
        if (true == $item->save()) {
            return $item->id;
        }
        return 0;
    }

    public function getItemList(Pageable $pageable, array $categoryIds, ?string $name = ""): \PhalconPlus\Base\Page
    {
        $condition = [];
        $parameters = [];

        if (!empty($categoryIds)) {
            $count = count($categoryIds);
            if ($count > 1) {
                $condition[] = "categoryId IN ({cateIds:array})";
                $parameters["cateIds"] = $categoryIds;
            } else {
                $condition[] = "categoryId = :cateId:";
                $parameters["cateId"] = reset($categoryIds);
            }
        }

        if (!empty($name)) {
            $condition[] = "(name LIKE :name: OR identity LIKE :name:)";
            $parameters["name"] = "%{$name}%";
        }
        $query = implode(" AND ", $condition);

        if (!$pageable->hasOrderBy()) {
            $pageable->setOrderBys(
                [
                    [
                        "property" => "sortNo",
                        "direction" => "ASC"
                    ],
                    [
                        "property" => "id",
                        "direction" => "DESC"
                    ]
                ]
            );
        }
        return ItemModel::newInstance()->findByPageable($pageable, [
            'conditions' => $query,
            'bind' => $parameters,
            'hydration' => \Phalcon\Mvc\Model\Resultset::HYDRATE_ARRAYS
        ]);
    }

    public function getItemById(int $id): array
    {
        $ret = ItemModel::findFirst($id);
        return $ret ? $ret->toArray() : [];
    }

    public function getDirectItemList(Pageable $pageable, int $categoryId): \PhalconPlus\Base\Page
    {
        $condition = [];
        $condition[] = "categoryId = $categoryId";
        $condition[] = "status = " . ItemStatus::STATUS_RELEASED;
        $query = implode(" AND ", $condition);

        if (!$pageable->hasOrderBy()) {
            $pageable->setOrderBys(
                [
                    [
                        "property" => "sortNo",
                        "direction" => "ASC"
                    ],
                    [
                        "property" => "id",
                        "direction" => "DESC"
                    ]
                ]
            );
        }
        return ItemModel::newInstance()->findByPageable($pageable, [$query]);
    }

    public function getItemByIdentity(string $identity): array
    {
        $condition = "identity = :identity:";
        $bind = [
            'identity' => $identity,
        ];
        $item = ItemModel::findFirst([
            $condition,
            'bind' => $bind,
        ]);
        return $item ? $item->toArray() : [];
    }

    public function getLatestItemByCategoryId(int $categoryId): array
    {
        $condition = "categoryId = :categoryId: AND status = :status:";
        $bind = [
            'categoryId' => $categoryId,
            'status' => ItemStatus::STATUS_RELEASED,
        ];
        $item = ItemModel::findFirst([
            $condition,
            'bind' => $bind,
            'order' => "sortNo ASC, id desc",
            'limit' => 1,
        ]);
        return $item ? $item->toArray() : [];
    }

    public function getBatchDataByIdentities(array $identities) : array
    {
        $identities = array_filter(array_values($identities), "is_int"); // 去掉array中的keys, 以防sql报错
        $condition = 'status = :status: AND identity IN ({identities:array})'; // 批量查询
        $bind = [
            'identities' => $identities,
            'status' => ItemStatus::STATUS_RELEASED,
        ];
        $itemList = ItemModel::find([
            $condition, 
            'bind' => $bind, 
            'order' => 'id DESC'
        ]);
        return $itemList->toArray();
    }

    public static function getLatestTopItemByCategoryId(int $categoryId, int $topNum = 1) : array
    {  
        Assert::range($topNum, 1, 1000);
        $condition = "categoryId = :categoryId: AND status = :status:";
        $bind = array(
            'categoryId' => $categoryId,
            'status' => ItemStatus::STATUS_RELEASED,
        );
        $itemList = ItemModel::find([
            $condition, 
            'bind' => $bind, 
            'order' => 'sortNo ASC, id DESC', 
            'limit' => $topNum
        ]);
        return $itemList->toArray();
    }
}
