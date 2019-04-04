<?php

namespace LightCloud\Uc\Entities;
use League\OAuth2\Server\Entities\ScopeEntityInterface;
use LightCloud\Uc\Models\OauthScopesModel;

class ScopeEntity extends OauthScopesModel implements ScopeEntityInterface
{
    /**
     * Get the scope's identifier.
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->scope;
    }
}