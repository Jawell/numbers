<?php

session_start();
require_once 'loader.php';
$router = new Router;
$router->start();