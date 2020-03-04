<?php
namespace LightCloud\Uc\Entities;

use League\OAuth2\Server\Entities\AuthCodeEntityInterface;
use League\OAuth2\Server\Entities\Traits\AuthCodeTrait;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\TokenEntityTrait;

use LightCloud\Uc\Models\OauthAuthorizationCodesModel;

class AuthCodeEntity implements AuthCodeEntityInterface
{
    use AuthCodeTrait, EntityTrait, TokenEntityTrait, EntityModelTrait;

    protected static $modelClass = OauthAuthorizationCodesModel::class;
    
    public function getScopeNames()
    {
        $scopes = $this->getScopes();
        $scopeNames = array_map(function($scope) {
            return  $scope->getIdentifier();
        }, $scopes);
        return $scopeNames;
    } 
}