<?php
namespace LightCloud\Uc\Repositories;

use League\OAuth2\Server\Repositories\AuthCodeRepositoryInterface;
use LightCloud\Uc\Entities\AuthCodeEntity;
use League\OAuth2\Server\Entities\AuthCodeEntityInterface;
use League\OAuth2\Server\Exception\UniqueTokenIdentifierConstraintViolationException;

class AuthCodeRepository implements AuthCodeRepositoryInterface
{
       /**
     * Creates a new AuthCode
     *
     * @return AuthCodeEntityInterface
     */
    public function getNewAuthCode()
    {
        return new AuthCodeEntity();
    }

    /**
     * Persists a new auth code to permanent storage.
     *
     * @param AuthCodeEntityInterface $authCodeEntity
     *
     * @throws UniqueTokenIdentifierConstraintViolationException
     */
    public function persistNewAuthCode(AuthCodeEntityInterface $authCodeEntity)
    {
        $authCode = $authCodeEntity->getIdentifier();
        $authCodeEntity->setUniqueKeys(["authorizationCode"]);
        if($authCodeEntity->exists()) {
            throw UniqueTokenIdentifierConstraintViolationException::create();
        }
        $result = $authCodeEntity->create([
            'authorizationCode' => $authCode,
            'expires' => $authCodeEntity->getExpiryDateTime()->format('Y-m-d H:i:s'),
            'scope' => implode(' ', $authCodeEntity->getScopeNames()),
            'clientId' => $authCodeEntity->getClient()->getIdentifier(),
            // I do not understand why redirect_uri isn't saving to the oauth_codes table.. Must be witchcraft
            // switching to redirect_url
            'redirectUrl' => $authCodeEntity->getRedirectUri(),
            'userId' => $authCodeEntity->getUserIdentifier(),
            'revoked' => 0,
        ]);
        return $result;
    }

    /**
     * Revoke an auth code.
     *
     * @param string $codeId
     */
    public function revokeAuthCode($codeId)
    {
        $authCode = AuthCodeEntity::findFirst([
            "authorizationCode = :ac: ",
            "bind" => [
                "ac" => $codeId
            ]
        ]);
        $authCode->revoked = 1;
        if($authCode->update() == true) {
            return true;
        }
        throw new \Exception("revoke accesss token excepiion");
    }

    /**
     * Check if the auth code has been revoked.
     *
     * @param string $codeId
     *
     * @return bool Return true if this code has been revoked
     */
    public function isAuthCodeRevoked($codeId)
    {
        $authCode = AuthCodeEntity::findFirst([
            "authorizationCode = :ac: ",
            "bind" => [
                "ac" => $codeId
            ]
        ]);
        if($authCode) {
            return (int) $authCode->revoked === 1;
        }
        return true;
    }
}