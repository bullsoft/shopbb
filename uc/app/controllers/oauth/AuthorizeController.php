<?php
namespace LightCloud\Uc\Controllers\OAuth;
use LightCloud\Uc\Controllers\BaseController;

use GuzzleHttp\Psr7\ServerRequest;
use League\OAuth2\Server\AuthorizationValidators\BearerTokenValidator;
use League\OAuth2\Server\CryptKey;
use League\OAuth2\Server\Exception\OAuthServerException;
use LightCloud\Uc\Entities\ClientEntity;
use LightCloud\Uc\Plugins\OAuth2;
use LightCloud\Uc\Entities\UserEntity;
use function GuzzleHttp\json_decode;

class AuthorizeController extends BaseController
{
    /**
     * 
     * @api
     */
    public function accessTokenAction()
    {
        // grant_type, client_id, client_secret, scope, username, password
        $serverResponse = new \GuzzleHttp\Psr7\Response();
        try {
            $request = ServerRequest::fromGlobals();
            $oauth2Server = OAuth2::newAuthorizationServer();
            $response = $oauth2Server->respondToAccessTokenRequest($request, $serverResponse);
            $content = (string) $response->getBody();
            return json_decode($content);
        } catch(\Exception $e) {
            throw $e;
        } 
    }

    /**
     * @disableGuest
     * @disableView
     */
    public function tokenAction()
    {
        $serverResponse = new \GuzzleHttp\Psr7\Response();
        // response_type, client_id, redirect_uri, scope, state
        $oauth2Server = OAuth2::newAuthorizationServer();
        try {
            $request = ServerRequest::fromGlobals();
            // Validate the HTTP request and return an AuthorizationRequest object.
            $authRequest = $oauth2Server->validateAuthorizationRequest($request);
            // The auth request object can be serialized and saved into a user's session.
            // You will probably want to redirect the user at this point to a login endpoint.
            // Once the user has logged in set the user on the AuthorizationRequest
            $authRequest->setUser(new UserEntity([
                "id" => $this->session->get('identity')
            ])); // an instance of UserEntityInterface
            // At this point you should redirect the user to an authorization page.
            // This form will ask the user to approve the client and the scopes requested.
            // Once the user has approved or denied the client update the status
            // (true = approved, false = denied)
            $authRequest->setAuthorizationApproved(true);
            // Return the HTTP redirect response
            $response = $oauth2Server->completeAuthorizationRequest($authRequest, $serverResponse);
            if($response->getStatusCode() == 302) {
                $r = new \Phalcon\Http\Response();
                $locations = $response->getHeader("Location");
                $r->redirect(reset($locations));
                return $r;
            }
        } catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * @disableGuest
     */
    public function codeAction()
    {
        $serverResponse = new \GuzzleHttp\Psr7\Response();
        // response_type, client_id, redirect_uri, scope, state
        $oauth2Server = OAuth2::newAuthorizationServer();
        try {
            $request = ServerRequest::fromGlobals();
            // Validate the HTTP request and return an AuthorizationRequest object.
            $authRequest = $oauth2Server->validateAuthorizationRequest($request);
            // The auth request object can be serialized and saved into a user's session.
            // You will probably want to redirect the user at this point to a login endpoint.
            // Once the user has logged in set the user on the AuthorizationRequest
            $authRequest->setUser(new UserEntity([
                "id" => $this->session->get('identity')
            ])); // an instance of UserEntityInterface
            // At this point you should redirect the user to an authorization page.
            // This form will ask the user to approve the client and the scopes requested.
            // Once the user has approved or denied the client update the status
            // (true = approved, false = denied)
            $authRequest->setAuthorizationApproved(true);
            // Return the HTTP redirect response
            $response = $oauth2Server->completeAuthorizationRequest($authRequest, $serverResponse);
            if($response->getStatusCode() == 302) {
                $r = new \Phalcon\Http\Response();
                $locations = $response->getHeader("Location");
                $r->redirect(reset($locations));
                return $r;
            }
        } catch(\Exception $e) {
            throw $e;
        }
    }
}