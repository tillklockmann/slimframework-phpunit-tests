<?php

use PHPUnit\Framework\TestCase;

class HelloControllerTest extends TestCase
{
    public function testHelloControllerWorks()
    {
        // instantiate action
        $action = new \Tkm\HelloController();

        // We need a request and response object to invoke the action
        $environment = \Slim\Http\Environment::mock([
            'REQUEST_METHOD' => 'POST',
            'REQUEST_URI' => '/hello',
            ]
        );
        $request = \Slim\Http\Request::createFromEnvironment($environment)->withParsedBody(['foo'=>'bar']);
        $response = new \Slim\Http\Response();

        // run the controller action and test it
        $response = $action->run($request, $response);
        $this->assertSame((string)$response->getBody(), '{"foo":"bar"}');
    }
}