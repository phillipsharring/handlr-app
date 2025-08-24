<?php

require_once __DIR__ . '/../bootstrap.php';

use Handlr\Core\Kernel;
use Handlr\Core\Request;
use Handlr\Core\Response;

$kernel = new Kernel(HANDLR_APP_ROOT);

$request = Request::fromGlobals();
$response = new Response;

$response = $kernel->getRouter()->dispatch($request, $response);
$response->send();
