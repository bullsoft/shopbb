<?php
namespace LightCloud\Uc\Plugins;

use Phalcon\Mvc\User\Plugin;
use \Defuse\Crypto\Key;

use \LightCloud\Uc\Repositories\ClientRepository;
use \LightCloud\Uc\Repositories\UserRepository;
use \LightCloud\Uc\Repositories\ScopeRepository;
use \LightCloud\Uc\Repositories\RefreshTokenRepository;
use \LightCloud\Uc\Repositories\AccessTokenRepository;
use \LightCloud\Uc\Repositories\AuthCodeRepository;

use \League\OAuth2\Server\Grant;

class OAuth2Server extends Plugin
{
    public static function newInstance()
    {
        $clientRepository = new ClientRepository();
        $scopeRepository = new ScopeRepository();
        $accessTokenRepository = new AccessTokenRepository();
        $userRepository = new UserRepository();
        $refreshTokenRepository = new RefreshTokenRepository();
        $authCodeRepository = new AuthCodeRepository();

        $config = di()->getConfig();
        // Setup the authorization server
        $server = new \League\OAuth2\Server\AuthorizationServer(
            $clientRepository,
            $accessTokenRepository,
            $scopeRepository,
            new \League\OAuth2\Server\CryptKey($config->oauth2->privateKeyPath),
            Key::loadFromAsciiSafeString($config->oauth2->encryptionKey)
        );
        // Lifespan
        $accessTokenLifespan = $config->oauth2->accessTokenLifespan;
        $refreshTokenLifespan = $config->oauth2->refreshTokenLifespan;
        $authCodeLifespan = $config->oauth2->authCodeLifespan;
        // Grants
        $passwordGrant = new Grant\PasswordGrant($userRepository, $refreshTokenRepository);
        $passwordGrant->setRefreshTokenTTL($refreshTokenLifespan);
        $authCodeGrant = new Grant\AuthCodeGrant(
            $authCodeRepository,
            $refreshTokenRepository,
            $authCodeLifespan
        );
        $refreshTokenGrant = new Grant\RefreshTokenGrant($refreshTokenRepository);
        $refreshTokenGrant->setRefreshTokenTTL($refreshTokenLifespan);
        // Enable the refresh token grant on the server
        $server->enableGrantType($refreshTokenGrant, $accessTokenLifespan);
        $authCodeGrant->setRefreshTokenTTL($refreshTokenLifespan);
        // Enable the authentication code grant on the server
        $server->enableGrantType($authCodeGrant, $accessTokenLifespan);
        // Enable the password grant on the server
        $server->enableGrantType($passwordGrant, $accessTokenLifespan);
        // Enable the client credentials grant on the server
        $server->enableGrantType(new Grant\ClientCredentialsGrant(), $accessTokenLifespan);
        // Enable the implicit grant on the server
        $server->enableGrantType(
            new Grant\ImplicitGrant($accessTokenLifespan),
            $accessTokenLifespan
        );
        return $server;
    }
}