<?php

namespace App\Core;

class Router
{
    function start() {
        $route = (empty($_GET['route'])) ? 'index' : $_GET['route'];
        unset ($_GET['route']);
        if ($route == 'index') {
            $controllerName = Paths::DEFAULT_CONTROLLER;
            $action = Paths::DEFAULT_ACTION;
            $classPath = "\\App\Controllers\\$controllerName";
            $controller = new $classPath;
            $controller->$action();
        } else {
            $route = trim($route, '/\\');
            $parts = explode('/', $route);
            $path = Paths::CONTROLLER_PATH . $parts[0] . '.php';
            if (file_exists($path)) {
                $controllerName = $parts[0];
                $classPath = "\\App\Controllers\\$controllerName";
                $controller = new $classPath;
                $action = (empty($parts[1])) ? Paths::DEFAULT_ACTION : $parts[1];
                if (method_exists($controller, $action)) {
                    $controller->$action();
                }
            } else {
                //TODO: error
            }
        }
    }
}
