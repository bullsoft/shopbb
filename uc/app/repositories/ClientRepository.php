<?php
namespace LightCloud\Uc\Repositories;
use PhalconPlus\Assert\Assertion as Assert;
use League\OAuth2\Server\Repositories\ClientRepositoryInterface;
use LightCloud\Uc\Entities\ClientEntity;

class ClientRepository implements ClientRepositoryInterface
{
    public function getClientEntity($clientIdentifier, $grantType = null, $clientSecret = null, $mustValidateSecret = true)
    {
        Assert::numeric($clientIdentifier);

        $client = ClientEntity::findFirst([
            "id = :id:",
            "bind" => [
                "id" => $clientIdentifier,
            ]
        ]);

        if (empty($client)) return null;
        
        if ($mustValidateSecret && $client->clientSecret !== $clientSecret) {
            return null;
        }

        // check grant types
        if (!empty($grantType)) {
            $enumGrantType = new \LightCloud\Com\Protos\Uc\Enums\GrantType(trim($grantType));
            $clientGrants = explode(",", $client->grantTypes);
            array_walk($clientGrants, function (&$item) {
                return trim($item);
            });

            if (!in_array($enumGrantType->getValue(), $clientGrants)) {
                return null;
            }
        }
        
        return $client;
    }
}