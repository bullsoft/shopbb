<?php

namespace LightCloud\CentCMS\Backend\Repositories;

use LightCloud\Com\Protos\CentCMS\Schemas\Pageable;
use PhalconPlus\Assert\Assertion as Assert;
use LightCloud\CentCMS\Backend\Models\SchemaTemplateModel;
use LightCloud\Com\Protos\CentCMS\Enums\SchemaTemplateStatus;

class SchemaTemplateRepository
{
    public function addSchemaTemplate(array $data) : int
    {
        Assert::notEmpty($data);
        $template = new SchemaTemplateModel();
        $template->assign($data);
        if(true == $template->save()) {
            return $template->id;
        }
        return 0;
    }

    public function getSchemaTemplateListPageable(Pageable $pageable, ?string $name = '', $createUserId = '') : \PhalconPlus\Base\Page
    {
        $bind = [];
        $condition = [];
        if (!empty($createUserId)) {
            $condition[] = "(createUserId = :createUserId:)";
            $bind['createUserId'] = $createUserId;
        }
        if (!empty($name)) {
            $condition[]  = "(name LIKE :name: OR identity LIKE :name:)";
            $bind['name'] = "%$name%";
        }
        if(!$pageable->hasOrderBy()) {
            $pageable->setOrderBys(
                [
                    [
                        "property"  => "id",
                        "direction" => "DESC"
                    ]
                ]
            );
        }
        return SchemaTemplateModel::findByPageable(
            $pageable, 
            [
                'condition' => implode(' AND ',  $condition), 
                'bind'      => $bind,
            ]
        );
    }

    public function getAllSchemaTemplateList(?int $status = null) : array
    {
        $condition = [];
        $bind = [];
        if (is_null($status)) {
            $condition[] = "status IN ({statuses:array})";
            $bind['statuses'] = SchemaTemplateStatus::getValues();
        } else {
            $condition = "status = :status:";
            $bind['status'] = $status;
        }
        $results = SchemaTemplateModel::find(
            [
                $condition, 
                'bind' => $bind
            ]
        );
        return $results->toArray();
    }

    public function getSchemaTemplateByIdentity(string $identity) : array
    {
        $condition = "identity = :identity:";
        $bind= [
            'identity' => $identity,
        ];
        $template = SchemaTemplateModel::findFirst([
            $condition, 
            'bind' => $bind
        ]);
        return $template ? $template->toArray() : [];
    }

    public function getSchemaTemplateById(int $id, $createUserId = '') : array
    {
        $condition = [];
        $bind = [];

        $condition[] = "id = :id:";
        $bind['id'] = $id;

        if (!empty($createUserId)) {
            $condition[] = "createUserId = :createuserId:";
            $bind['createUserId'] = $createUserId;
        }

        $template = SchemaTemplateModel::findFirst([
            'condition' => implode(" AND ", $condition),
            'bind' => $bind
        ]);

        return $template ? $template->toArray() : [];
    }
}