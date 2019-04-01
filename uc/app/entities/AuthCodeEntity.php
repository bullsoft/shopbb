<?php
namespace LightCloud\Uc\Entities;

use League\OAuth2\Server\Entities\AuthCodeEntityInterface;
use League\OAuth2\Server\Entities\Traits\AuthCodeTrait;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\TokenEntityTrait;

use LightCloud\Uc\Models\OauthAuthorizationCodesModel;

class AuthCodeEntity extends OauthAuthorizationCodesModel implements AuthCodeEntityInterface
{
    use AuthCodeTrait, EntityTrait, TokenEntityTrait;
}