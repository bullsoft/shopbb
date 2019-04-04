<?php
namespace LightCloud\Uc\Repositories;

use League\OAuth2\Server\Repositories\AccessTokenRepositoryInterface;
use LightCloud\Uc\Entities\AccessTokenEntity;
use League\OAuth2\Server\Entities\AccessTokenEntityInterface;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\ScopeEntityInterface;
use League\OAuth2\Server\Exception\UniqueTokenIdentifierConstraintViolationException;
use \League\OAuth2\Server\Grant\AbstractGrant;


class AccessTokenRepository implements AccessTokenRepositoryInterface
{
    /**
     * Create a new access token
     *
     * @param ClientEntityInterface  $clientEntity
     * @param ScopeEntityInterface[] $scopes
     * @param mixed                  $userIdentifier
     *
     * @return AccessTokenEntityInterface
     */
    public function getNewToken(ClientEntityInterface $clientEntity, array $scopes, $userIdentifier = null)
    {
        $accessToken = new AccessTokenEntity();
        foreach($scopes as $scope) {
            $accessToken->addScope($scope);
        }
        $accessToken->setUserIdentifier($userIdentifier);
        $accessToken->setClient($clientEntity);
        return $accessToken;
    }

    /**
     * Persists a new access token to permanent storage.
     *
     * @param AccessTokenEntityInterface $accessTokenEntity
     *
     * @throws UniqueTokenIdentifierConstraintViolationException
     */
    public function persistNewAccessToken(AccessTokenEntityInterface $accessTokenEntity)
    {
        $accessToken = $accessTokenEntity->getIdentifier();
        $accessTokenEntity->setUniqueKeys(['accessToken']);
        if ($accessTokenEntity->exists()) {
            throw UniqueTokenIdentifierConstraintViolationException::create();
        }
        $result = $accessTokenEntity->create([
            'accessToken' => $accessToken,
            'expires' => $accessTokenEntity->getExpiryDateTime()->format('Y-m-d H:i:s'),
            'scope' => implode(AbstractGrant::SCOPE_DELIMITER_STRING, $accessTokenEntity->getScopeNames()),
            'clientId' => $accessTokenEntity->getClient()->getIdentifier(),
            'userId' => $accessTokenEntity->getUserIdentifier(),
            'revoked' => 0
        ]);
        return $result;
    }

    /**
     * Revoke an access token.
     *
     * @param string $tokenId
     */
    public function revokeAccessToken($tokenId)
    {
        $token = AccessTokenEntity::findFirst([
            "accessToken = :at: ",
            "bind" => [
                "at" => $tokenId
            ]
        ]);
        $token->revoked = 1;
        if($token->save() == true) {
            return true;
        }
        throw new \Exception("revoke accesss token excepiion");
    }

    /**
     * Check if the access token has been revoked.
     *
     * @param string $tokenId
     *
     * @return bool Return true if this token has been revoked
     */
    public function isAccessTokenRevoked($tokenId)
    {
        $token = AccessTokenEntity::findFirst([
            "accessToken = :at: ",
            "bind" => [
                "at" => $tokenId
            ]
        ]);
        if($token) {
            return (int) $token->revoked === 1;
        }
        return true;
    }
}