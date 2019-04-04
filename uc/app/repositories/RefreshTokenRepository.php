<?php
namespace LightCloud\Uc\Repositories;

use League\OAuth2\Server\Repositories\RefreshTokenRepositoryInterface;
use LightCloud\Uc\Entities\RefreshTokenEntity;
use League\OAuth2\Server\Entities\RefreshTokenEntityInterface;
use League\OAuth2\Server\Exception\UniqueTokenIdentifierConstraintViolationException;

class RefreshTokenRepository implements RefreshTokenRepositoryInterface
{
    /**
     * Creates a new refresh token
     *
     * @return RefreshTokenEntityInterface
     */
    public function getNewRefreshToken()
    {
        return new RefreshTokenEntity();
    }

    /**
     * Create a new refresh token_name.
     *
     * @param RefreshTokenEntityInterface $refreshTokenEntity
     *
     * @throws UniqueTokenIdentifierConstraintViolationException
     */
    public function persistNewRefreshToken(RefreshTokenEntityInterface $refreshTokenEntity)
    {
        $token = $refreshTokenEntity->getIdentifier();
        $refreshTokenEntity->setUniqueKeys(['refreshToken']);
        if ($refreshTokenEntity->exists()) {
            throw UniqueTokenIdentifierConstraintViolationException::create();
        }
        $accessToken = $refreshTokenEntity->getAccessToken();
        $result = $refreshTokenEntity->create([
            'refreshToken' => $token,
            'expires' => $refreshTokenEntity->getExpiryDateTime()->format("Y-m-d H:i:s"),
            'clientId' => $accessToken->getClient()->getIdentifier(),
            'userId' => $accessToken->getUserIdentifier(),
            'revoked' => 0,
        ]);
        return $result;
    }

    /**
     * Revoke the refresh token.
     *
     * @param string $tokenId
     */
    public function revokeRefreshToken($tokenId)
    {

    }

    /**
     * Check if the refresh token has been revoked.
     *
     * @param string $tokenId
     *
     * @return bool Return true if this token has been revoked
     */
    public function isRefreshTokenRevoked($tokenId)
    {

    }
}