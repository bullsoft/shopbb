<?php

namespace LightCloud\Uc\Entities;

use League\OAuth2\Server\Entities\RefreshTokenEntityInterface;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\RefreshTokenTrait;

use LightCloud\Uc\Models\OauthRefreshTokensModel;

class RefreshTokenEntity extends OauthRefreshTokensModel implements RefreshTokenEntityInterface
{
    use RefreshTokenTrait, EntityTrait;
}