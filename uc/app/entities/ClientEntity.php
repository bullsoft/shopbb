<?php
namespace LightCloud\Uc\Entities;

use League\OAuth2\Server\Entities\ClientEntityInterface;
use LightCloud\Uc\Models\OauthClientsModel;

class ClientEntity extends OauthClientsModel implements ClientEntityInterface
{
    /**
     * Get the client's identifier.
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->id;
    }

    /**
     * Get the client's name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the registered redirect URI (as a string).
     *
     * Alternatively return an indexed array of redirect URIs.
     *
     * @return string|string[]
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    public static function getByIdAndSecret($id, $secret) 
    {
        $clientEntity = self::findFirst([
            "id = :id: AND clientSecret = :cs:",
            "bind" => [
                "id" => intval($id),
                "cs" => strval($secret)
            ]
        ]);
        
        if(empty($clientEntity)) {
            throw new \Exception();
        }
        return $clientEntity;
    }

}