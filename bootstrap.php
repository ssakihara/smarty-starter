<?php

/**
 * Application bootstrap
 */

define('PROJECT_ROOT', __DIR__);

$bootstrap = glob(__DIR__ . '/bootstrap/*.php');
foreach ($bootstrap as $path) {
    require_once $path;
}

$config = glob(__DIR__ . '/config/*.php');
foreach ($config as $path) {
    require_once $path;
}
