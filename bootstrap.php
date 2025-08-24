<?php

require_once __DIR__ . '/vendor/autoload.php';

if (!defined('HANDLR_APP_ROOT')) {
    define('HANDLR_APP_ROOT', __DIR__);
}

const HANDLR_APP_APP_PATH = __DIR__;

use Handlr\Config\Loader;

Loader::load(__DIR__ . '/app/config.php');
