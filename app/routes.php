<?php

use Handlr\Core\Router;
use Handlr\Handlers\ViewHandler;

/** @var Router $router */
$router->get('/', [
    new ViewHandler('home'),
]);
