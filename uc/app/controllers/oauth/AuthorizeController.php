<?php
namespace LightCloud\Uc\Controllers\OAuth;
use LightCloud\Uc\Controllers\BaseController;
use GuzzleHttp\Psr7\ServerRequest;

use LightCloud\Uc\Entities\ClientEntity;

class AuthorizeController extends BaseController
{
    /**
     * 
     * @disableView
     */
    public function authorizeAction()
    {  
        // grant_type, client_id, client_secret, scope, username, password
        
    }

    public function tokenAction()
    {

    }

    public function codeAction()
    {

    }
}