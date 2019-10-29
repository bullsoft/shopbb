<?php
namespace LightCloud\CentCMS\Backend\Services;
use PhalconPlus\Base\SimpleRequest as SimpleRequest;
use PhalconPlus\Assert\Assertion as Assert;
use LightCloud\Com\Protos\CentCMS\Schemas\{
    Category as CategorySchema,
    Id,
    Ids,
    Pageable
};
use LightCloud\Com\Protos\CentCMS\Enums\CategoryStatus;
use LightCloud\CentCMS\Backend\Repositories\{
    CategoryRepository,
    ItemRepository,
};
use PhalconPlus\Com\Protos\ExceptionBase;

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

    public function getCategoryDetail(Id $request) : array
    {
        $categoryId = ($request->validate())->getId();
        $repo = new CategoryRepository();
        return $repo->getOne($categoryId);
    }

    public function getChildrenList(SimpleRequest $request) : array
    {
        $categoryId = $request->getParam("id");
        Assert::integer($categoryId);
        Assert::notEq($categoryId, 0);
        $repo = new CategoryRepository();
        if ($categoryId < 0) {
            $categoryId = $repo->getRootId();
        }
        $backward = $request->getParam("backward") ?? false;

        $depth = $request->getParam("depth") ?: 2;
        Assert::integer($depth);
        Assert::min($depth, 2);
        $depth = min($depth, 20);
        $status = intval($request->getParam("status"));
        if($status <= 0) {
            $status = null;
        } else {
            Assert::inArray($status, CategoryStatus::getValues());
            $status = [$status];
        }
        $args = [$categoryId, $depth, $status, $backward];
        $pageable = $request->getParam("pageable");
        if ($pageable instanceof Pageable) {
            $offset = $pageable->getOffset();
            $limit = $pageable->getLimit();
            $args[] = $limit;
            $args[] = $offset;
        }
        return $repo->getChildren(...$args);
    }

    public function getIdNameMap(Ids $request) : array
    {
        $categoryIds = ($request->validate())->getIds();
        $repo = new CategoryRepository();
        $ret = $repo->get($categoryIds);
        return array_column($ret, "name", "id");
    }

    public function getLatestDataByCategoryIdentity(SimpleRequest $request) : array
    {
        $identity = $request->getParam("identity");
        Assert::isString($identity);
        $repo = new CategoryRepository();
        $cateNode = $repo->getOneByIdentity($identity);
        if(empty($cateNode)) {
            throw new \PhalconPlus\Com\Protos\ExceptionBase("category(identity: {$identity}) not exists");
        }
        $itemRepo = new ItemRepository();
        return $itemRepo->getLatestItemByCategoryId($cateNode['id']);
    }

    public function getDataByCategoryPageable(SimpleRequest $request) : \PhalconPlus\Base\Page
    {
        $identity = $request->getParam("identity");
        Assert::isString($identity);
        Assert::minLength($identity, 4);

        $repo = new CategoryRepository();
        $cateNode = $repo->getOneByIdentity($identity);
        if(empty($cateNode)) {
            ExceptionBase::throw("category(identity: {$identity}) not exists");
        }

        $pageable = $request->getParam("pageable");
        Assert::isInstanceOf($pageable, Pageable::class);
        $itemRepo = new ItemRepository();
        return $itemRepo->getItemList($pageable, [$cateNode['id']]);
    }
}