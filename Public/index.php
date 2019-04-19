<?php

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

// base目录
Define('BASE_PATH', dirname(__DIR__));

// 加载loader
require __DIR__ . '/../dp/Loader.php';
spl_autoload_register('Dp\Loader::autoload');

// 配置目录
Define('CONF_PATH', BASE_PATH . DS . 'Config');

// run
$app = new Dp\App();
$app->run();