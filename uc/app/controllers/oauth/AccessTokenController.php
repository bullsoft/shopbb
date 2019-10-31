<?php
namespace LightCloud\Uc\Controllers\OAuth;
use LightCloud\Uc\Controllers\BaseController;
use LightCloud\Uc\Plugins\OAuth2;
use League\OAuth2\Server\Middleware\ResourceServerMiddleware;
use LightCloud\Uc\Entities\UserEntity;
use GuzzleHttp\Psr7\ServerRequest;
use PhalconPlus\Com\Protos\Exceptions\FormInputInvalidException;
use LightCloud\Com\Protos\Uc\Exceptions\AuthFailedException;
use PhalconPlus\Assert\Assertion as Assert;

class AccessTokenController extends BaseController
{
    /**
     * @api 
    */
    public function validateAction()
    {
        $serverResponse = new \GuzzleHttp\Psr7\Response();       
        $request = $this->request->getPsrRequest();
        $server = OAuth2::newResourceServer();

        $accessToken = $this->request->getPost("accessToken", "string");
        Assert::notEmpty($accessToken);

        $newRequest = $request->withHeader("Authorization", "Bearer " . $accessToken);

        // Validate 
        // Header Authorization: Bearer {access-token}
        // If accepted, $result will be a Request with details ...
        //   , or it will be a Response from an exception
        $result = (new ResourceServerMiddleware($server))($newRequest, $serverResponse, function($req, $res) {
            return $req;
        });
        $accessScope = $this->request->getPost("scope", "string");
        if($result instanceof \GuzzleHttp\Psr7\Response) {
            $content = (string) $result->getBody();
            throw new FormInputInvalidException(["OAuth AccessToken validate failed", $content]);
        } else if($result instanceof ServerRequest) {
            $attrs = $result->getAttributes();
            $scopes = array_filter($attrs['oauth_scopes'], function($scopeItem) use ($accessScope) {
                if($accessScope == $scopeItem) return true;
                return false;
            });
            if(empty($scopes)) throw new AuthFailedException("no scope there in user scopes", 333232);
            return ["access" => true];
        }
    }
} 