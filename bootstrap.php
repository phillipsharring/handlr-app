<?php

require_once __DIR__ . '/vendor/autoload.php';

if (!defined('HANDLR_APP_ROOT')) {
    define('HANDLR_APP_ROOT', __DIR__);
}

const HANDLR_APP_APP_PATH = __DIR__ . '/app';

use Handlr\Config\Loader;

Loader::load(HANDLR_APP_APP_PATH . '/config.php');
