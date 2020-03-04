<?php

namespace LightCloud\Uc\Entities;
use League\OAuth2\Server\Entities\ScopeEntityInterface;
use LightCloud\Uc\Models\OauthScopesModel;
use League\OAuth2\Server\Entities\Traits\ScopeTrait;

class ScopeEntity implements ScopeEntityInterface
{
    use ScopeTrait, EntityModelTrait;

    protected static $modelClass =  OauthScopesModel::class;

    /**
     * Get the scope's identifier.
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->scope;
    }

    // public function jsonSerialize()
    // {
    //     return $this->getIdentifier();
    // }
}