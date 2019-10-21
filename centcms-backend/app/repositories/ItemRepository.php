<?php

namespace LightCloud\CentCMS\Backend\Repositories;

use LightCloud\CentCMS\Backend\Models\ItemModel;
use LightCloud\Com\Protos\CentCMS\Schemas\Pageable;
use LightCloud\Com\Protos\CentCMS\Enums\ItemStatus;

class ItemRepository
{
    public function addItem(array $data) : int
    {
        if(empty($data)) {
            return 0;
        }
        $item = new ItemModel();
        $item->assign($data);
        if(true == $item->save()) {
            return $item->id;
        }
        return 0;
    }

    public function getItemList(Pageable $pageable, array $categoryIds, ?string $name = "")
    {
        $condition = []; 
        $parameters = [];

        $condition[] = "categoryId IN ({cateIds:array})";
        $parameters["cateIds"] = $categoryIds;

        if(!empty($name)) {
            $condition[] = "(name LIKE :name: OR identity LIKE :name:)";
            $parameters["name"] = "%{$name}%";
        }
        $query = implode(" AND ", $condition);

        if(!$pageable->hasOrderBy()) {
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

    public function getItemById(int $id) : array
    {
        $ret = ItemModel::findFirst($id);
        return $ret ? $ret->toArray() : [];
    }

    public function getDirectItemList(Pageable $pageable, int $categoryId)
    {
        $condition = [];
        $condition[] = "categoryId = $categoryId";
        $condition[] = "status = ". ItemStatus::STATUS_RELEASED;
        $query = implode(" AND ",$condition);

        if(!$pageable->hasOrderBy()) {
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
        $results = ItemModel::newInstance()->findByPageable($pageable, [$query]);
        return $results;
    }


    public function getItemByIdentity(string $identity) : array
    {
        $condition = "identity = :identity:";
        $parameters = [
            'identity' => $identity,
        ];
        $itemInfo = ItemModel::findFirst([
            $condition, 
            'bind' => $parameters
        ]);
        return $itemInfo ? $itemInfo->toArray() : [];
    }

    public function getLatestItemByCategoryId(int $categoryId) : array
    {
        $condition = "categoryId = :categoryId: AND status = :status:";
        $bindArray = [
            'categoryId' => $categoryId,
            'status' => ItemStatus::STATUS_RELEASED,
        ];
        $item = ItemModel::findFirst([
            $condition, 
            'bind' => $bindArray,  
            'order' => "sortNo ASC, id desc",
            'limit' => 1,
        ]);
        return $item ? $item->toArray() : [];
    }
}