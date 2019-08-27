<?php
require __DIR__ . '/../vendor/autoload.php';

if (is_file(__DIR__ . '/../.env')) {
    $dotenv = \Dotenv\Dotenv::create(__DIR__ . '/../');
    $dotenv->load();
    $dotenv->required([
        'EXTAS__BASE_PATH',
        'EXTAS__DRIVER',
        'EXTAS__DSN',
        'EXTAS__DB',
        'EXTAS__CONTAINER_PATH_STORAGE_LOCK',
        'EXTAS__CONTAINER_PATH_STORAGE',
        'EXTAS__DRIVERS_STORAGE_PATH'
    ])->notEmpty();
}

$alisa = new \extas\components\yandex\Alice();
$alisa->run();