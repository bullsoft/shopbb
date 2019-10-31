<?php
namespace LightCloud\Uc\Controllers\OAuth;
use LightCloud\Uc\Controllers\BaseController;
use LightCloud\Uc\Plugins\OAuth2;
use League\OAuth2\Server\Middleware\ResourceServerMiddleware;
use LightCloud\Uc\Entities\UserEntity;
use GuzzleHttp\Psr7\ServerRequest;
use PhalconPlus\Com\Protos\Exceptions\FormInputInvalidException;
use LightCloud\Com\Protos\Uc\Exceptions\AuthFailedException;
use LightCloud\Com\Protos\Uc\Exceptions\UserNotExistsException;

class UserController extends BaseController
{
    /**
     * @api
     */
    public function infoAction()
    {
        $serverResponse = new \GuzzleHttp\Psr7\Response();
        try {
            // $request = ServerRequest::fromGlobals();
            $request = $this->request->getPsrRequest();
            $server = OAuth2::newResourceServer();
            // Validate 
            // Header Authorization: Bearer {access-token}
            // If accepted, $result will be a Request with details ...
            //   , or it will be a Response from an exception
            $result = (new ResourceServerMiddleware($server))($request, $serverResponse, function($req, $res) {
                return $req;
            });
            
            if($result instanceof \GuzzleHttp\Psr7\Response) {
                $content = (string) $result->getBody();
                throw new FormInputInvalidException(["OAuth AccessToken validate failed", $content]);
            } else if($result instanceof ServerRequest) {
                $attrs = $result->getAttributes();
                $scopes = array_filter($attrs['oauth_scopes'], function($item) {
                    if("user" == reset($item)) return true;
                    return false;
                });
                if(empty($scopes)) throw new AuthFailedException(["no scope there in user scopes", "scope=user"]);
                $userId = $this->request->getPost("userId", "int");
                $user = UserEntity::findFirst(intval($userId));
                if(empty($user)) throw new UserNotExistsException(['userId not exists', $userId]);
                return $user->toProtoBuffer([
                    "id",
                    "username",
                    "nickname",
                    "mobile",
                    "status",
                ]);
            }
        } catch(\Exception $e) {
            throw $e;
        }
    }
}

