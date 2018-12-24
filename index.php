<?php

use App\Core\Router;

session_start();

$loader = require_once 'application/Core/Autoloader.php';
$loader->addNamespacePath('App', __DIR__ . '/application');

$router = new Router;
$router->start();
