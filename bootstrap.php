<?php

require_once __DIR__ . '/vendor/autoload.php';

if (!defined('HANDLR_APP_DIR')) {
    define('HANDLR_APP_ROOT', __DIR__);
}

use Handlr\Config\Loader;

Loader::load(__DIR__ . '/app/config.php');
