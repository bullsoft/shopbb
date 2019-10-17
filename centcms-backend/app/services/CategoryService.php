<?php
namespace LightCloud\CentCMS\Backend\Services;
use PhalconPlus\Base\SimpleRequest as SimpleRequest;
use LightCloud\Com\Protos\CentCMS\Schemas\Category as CategorySchema;
use LightCloud\CentCMS\Backend\Daos\CategoryDao;

class CategoryService extends \PhalconPlus\Base\Service
{
    public function addCategory(CategorySchema $request)
    {
        $data = $request->validate();
        CategoryDao::add($data->getName(), $data->getIdentity(), $data->getParentId());
    }
}