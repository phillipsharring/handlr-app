<?php

declare(strict_types=1);

namespace App;

use Handlr\Core\Request;
use Handlr\Core\Response;
use Handlr\Handlers\HandlerBase;

class HomeHandler extends ViewHandler
{

    public function handle(Request $request, Response $response, array $args = [], ?callable $next = null): Response
    {

        return $response->withJson(['message' => 'hi']);
    }
}
