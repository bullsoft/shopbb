<?php

namespace LightCloud\CentCMS\Backend\Repositories;

use LightCloud\CentCMS\Backend\Models\ItemModel;
use LightCloud\Com\Protos\CentCMS\Schemas\Pageable;

class ItemRepository
{
    public function getItemList(array $categoryIds, ?string $name, Pageable $pageable)
    {
        $condition = []; 
        $parameters = [];

        $condition[] = "categoryId IN ({cateIds:array})";
        $parameters["cateIds"] = $categoryIds;

        if(!empty($name)) {
            $condition[] = "(name LIKE :name: OR identity LIKE :name:)";
            $parameters["name"] = "%{$name}%";
        }
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
        return ItemModel::newInstance()->findByPageable($pageable, [
            'conditions' => $query, 
            'bind' => $parameters,
            'hydration' => \Phalcon\Mvc\Model\Resultset::HYDRATE_ARRAYS
        ]);  
    }
}