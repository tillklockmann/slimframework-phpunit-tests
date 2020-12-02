<?php
namespace Tkm;

// use Slim\Http\Request;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Response;
// use Psr\Http\Message\ResponseInterface as Response;

class HelloController
{
    public function run(Request $request,Response $response)
    {
        $args = $request->getParsedBody();

        return $response->withJson($args);
    }
}