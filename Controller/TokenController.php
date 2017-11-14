<?php

/*
 * This file is part of the FOSOAuthServerBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\OAuthServerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use OAuth2\OAuth2;
use OAuth2\OAuth2ServerException;
use Symfony\Component\HttpFoundation\Response;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class TokenController
{
    /**
     * @var OAuth2
     */
    protected $server;

    /**
     * @param OAuth2 $server
     */
    public function __construct(OAuth2 $server)
    {
        $this->server = $server;
    }

    /**
     * @param Request $request
     *
     * @return Response
     *
     * @ApiDoc(
     *  resource=true,
     *  section="Authentication",
     *  description="Authenticate and get access_token",
     *  requirements={
     *      {
     *          "name"="client_id",
     *          "dataType"="varchar",
     *      },
     *      {
     *          "name"="client_secret",
     *          "dataType"="varchar",
     *      },
     *      {
     *          "name"="grant_type",
     *          "dataType"="varchar",
     *      }
     *  },
     * )
     */
    public function tokenAction(Request $request)
    {
        try {
            return $this->server->grantAccessToken($request);
        } catch (OAuth2ServerException $e) {
            return $e->getHttpResponse();
        }
    }
}
