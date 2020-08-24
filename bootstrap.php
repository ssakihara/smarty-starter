<?php

/**
 * Application bootstrap
 */

define('PROJECT_ROOT', __DIR__);

// Composer
$autoload = null;
$autoloadFiles = [__DIR__ . '/../vendor/autoload.php', __DIR__ . '/../../../autoload.php'];
foreach ($autoloadFiles as $autoloadFile) {
    if (file_exists($autoloadFile)) {
        $autoload = $autoloadFile;
        break;
    }
}
if (!$autoload) {
    echo "Autoload file not found; try 'composer dump-autoload' first." . PHP_EOL;
    exit(1);
}
require $autoload;

// 環境変数読み込み
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// 定義
$config = glob(__DIR__ . '/config/*.php');
foreach ($config as $path) {
    require_once $path;
}

// 初期設定
$bootstrap = glob(__DIR__ . '/bootstrap/*.php');
foreach ($bootstrap as $path) {
    require_once $path;
}
