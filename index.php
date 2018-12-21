<?php

use App\Core\Router;

$loader = require_once 'application/Core/Autoloader.php';
$loader->addNamspacePath('App', __DIR__ . '/application');

session_start();
$router = new Router;
$router->start();