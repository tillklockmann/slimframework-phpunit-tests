<?php

require 'vendor/autoload.php';

$app = new Slim\App();

$app->post('/hello', Tkm\HelloController::class . ':run');

$app->run();