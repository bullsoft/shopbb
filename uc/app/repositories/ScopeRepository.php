<?php
namespace LightCloud\Uc\Repositories;

use League\OAuth2\Server\Repositories\ScopeRepositoryInterface;
use LightCloud\Uc\Entities\ScopeEntity;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\ScopeEntityInterface;

class ScopeRepository implements ScopeRepositoryInterface
{
    /**
     * Return information about a scope.
     *
     * @param string $identifier The scope identifier
     *
     * @return ScopeEntityInterface
     */
    public function getScopeEntityByIdentifier($identifier)
    {
        if(is_string($identifier)) {
            $scopeName = $identifier;
        } elseif(is_object($identifier)) {
            $scopeName = $identifier->scope;
        }
        $scopeEntity = ScopeEntity::findFirst([
            "scope = :s:",
            "bind" => [
                "s" => $scopeName
            ]
        ]);
        return $scopeEntity;
    }

    /**
     * Given a client, grant type and optional user identifier validate the set of scopes requested are valid and optionally
     * append additional scopes or remove requested scopes.
     *
     * @param ScopeEntityInterface[] $scopes
     * @param string                 $grantType
     * @param ClientEntityInterface  $clientEntity
     * @param null|string            $userIdentifier
     *
     * @return ScopeEntityInterface[]
     */
    public function finalizeScopes(
        array $scopes,
        $grantType,
        ClientEntityInterface $clientEntity,
        $userIdentifier = null
    ) {
        $client = (new ClientRepository())->getClientEntity($clientEntity->getIdentifier(), $grantType);
        $clientScopeStr = empty($client) ? null : $client->scope;
         //if scope was not saved for client or * was saved, ignore and return all scopes
        if (empty($clientScopeStr) || $clientScopeStr === '*') {
            //grant all scopes
            return $scopes;
        }
        //scopes of client from database
        $clientScopes = array_map('trim', explode(' ', $clientScopeStr));

        //remove any scope requested but not associated to client
        $result = [];
        foreach ($scopes as $scope) {
            if (!in_array($scope->getIdentifier(), $clientScopes)) {
                continue;
            }
            $result[] = $scope;
        }
        //include scope not requested but associated to client (optional)
        if (di()->getConfig()->oauth2->alwaysIncludeClientScopes) {
            $includedScopes = array_map(function (Scope $scope) {
                return $scope->getIdentifier();
            }, $result);
            $excludedScopes = array_diff($clientScopes, $includedScopes);
            array_walk($excludedScopes, function ($scopeIdentifier) use (&$result) {
                $result[] = $this->getScopeEntityByIdentifier($scopeIdentifier);
            });
        }
        return $result;
    }
}