<?php
namespace LightCloud\CentCMS\Backend\Services;
use PhalconPlus\Base\SimpleRequest as SimpleRequest;
use LightCloud\Com\Protos\CentCMS\Schemas\Category as CategorySchema;
use LightCloud\CentCMS\Backend\Repositories\CategoryRepository;
use LightCloud\CentCMS\Backend\Models\CategoryModel;

class CategoryService extends \PhalconPlus\Base\Service
{
    public function addCategory(CategorySchema $request)
    {
        $data = $request->validate();
        $repo = new CategoryRepository();
        return $repo->add($data->getName(), $data->getIdentity(), $data->getParentId());
    }

    public function getTopCategory()
    {
        $repo = new CategoryRepository();
        return $repo->getTops();
    }

    public function getCategoryDetail(SimpleRequest $request)
    {
        $categoryId = $request->getParam("id");
        $repo = new CategoryRepository();
        return $repo->getOne($categoryId);
    }

    public function getChildrenList(SimpleRequest $request)
    {
        $categoryId = $request->getParam("id");
        $repo = new CategoryRepository();
        if ($categoryId < 0) {
            $categoryId = $repo->getRootId();
        }
        $backward = $request->getParam("backward") ?? false;
        $depth = $request->getParam("depth") ?: 2;
        $status = intval($request->getParam("status"));
        if($status <= 0) {
            $status = null;
        } else {
            $status = [$status];
        }
        return $repo->getChildren($categoryId, $depth, $status, $backward);
    }

    public function getCategoryIdNameMap(SimpleRequest $request)
    {
        $categoryIds = $request->getParam("ids") ?: [];
        $categoryIds = array_filter($categoryIds, "is_int");
        if(empty($categoryIds)) return [];

        $resultset = CategoryModel::find([
            "conditions" => "id IN ({cateIds:array})",
            "bind" => [
                "cateIds" => $categoryIds
            ],
            "columns" => ["id", "name"],
            'hydration' => \Phalcon\Mvc\Model\Resultset::HYDRATE_ARRAYS
        ]);
        return array_column($resultset->toArray(), "name", "id");
    }

    public function a()
    {
        $repo = new CategoryRepository();
        return $repo->get([6]);
    }
}