<?php
namespace LightCloud\CentCMS\Backend\Daos;

class CategoryDao 
{
    public static function add($name, $identity, $parentId, $status = 0, $desc = "", $sortNo = 0)
    {
        var_dump(func_get_args());
    }
}