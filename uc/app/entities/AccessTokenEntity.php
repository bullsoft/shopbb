<?php
namespace LightCloud\Uc\Entities;

use League\OAuth2\Server\Entities\AccessTokenEntityInterface;
use League\OAuth2\Server\Entities\Traits\AccessTokenTrait;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\TokenEntityTrait;
use LightCloud\Uc\Models\OauthAccessTokensModel;

class AccessTokenEntity extends OauthAccessTokensModel implements AccessTokenEntityInterface
{
    use AccessTokenTrait, EntityTrait, TokenEntityTrait;

    public function getScopeNames()
    {
        $scopes = $this->getScopes();
        $scopeNames = array_map(function($scope) {
            return $scope->getIdentifier();
        }, $scopes);
        return $scopeNames;
    }
}