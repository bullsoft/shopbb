<?php
namespace LightCloud\Uc\Plugins;

use Phalcon\Mvc\User\Plugin;
use \LightCloud\Uc\Repositories\ClientRepository;

class OAuth2Server extends Plugin
{
    public function getInstance()
    {
        $clientRepository = new ClientRepository();
        $scopeRepository = new ScopeRepository();
        $accessTokenRepository = new AccessTokenRepository();
        $userRepository = new UserRepository();
        $refreshTokenRepository = new RefreshTokenRepository();
        $authCodeRepository = new AuthCodeRepository();
        // Setup the authorization server
        $server = new \League\OAuth2\Server\AuthorizationServer(
            $clientRepository,
            $accessTokenRepository,
            $scopeRepository,
            new \League\OAuth2\Server\CryptKey(getenv('PRIVATE_KEY_PATH')),
            getenv('ENCRYPTION_KEY')
        );
        $passwordGrant = new \League\OAuth2\Server\Grant\PasswordGrant($userRepository, $refreshTokenRepository);
        $passwordGrant->setRefreshTokenTTL($config->oauth->refresh_token_lifespan);
        $authCodeGrant = new AuthCodeGrant(
            $authCodeRepository,
            $refreshTokenRepository,
            $config->oauth->auth_code_lifespan
        );
        $refreshTokenGrant = new \League\OAuth2\Server\Grant\RefreshTokenGrant($refreshTokenRepository);
        $refreshTokenGrant->setRefreshTokenTTL($config->oauth->refresh_token_lifespan);
        // Enable the refresh token grant on the server
        $server->enableGrantType($refreshTokenGrant, $config->oauth->access_token_lifespan);
        $authCodeGrant->setRefreshTokenTTL($config->oauth->refresh_token_lifespan);
        // Enable the authentication code grant on the server
        $server->enableGrantType($authCodeGrant, $config->oauth->access_token_lifespan);
        // Enable the password grant on the server
        $server->enableGrantType($passwordGrant, $config->oauth->access_token_lifespan);
        // Enable the client credentials grant on the server
        $server->enableGrantType(new ClientCredentialsGrant(), $config->oauth->access_token_lifespan);
        // Enable the implicit grant on the server
        $server->enableGrantType(
            new \League\OAuth2\Server\Grant\ImplicitGrant($config->oauth->access_token_lifespan),
            $config->oauth->access_token_lifespan
        );
        return $server;
    }
}