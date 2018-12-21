<?php

class Router
{
    function start() {
        $route = (empty($_GET['route'])) ? 'index' : $_GET['route'];
        unset ($_GET['route']);
        if ($route == 'index') {
            $controllerName = Paths::CONTROLLER . Paths::DEFAULT_CONTROLLER;
            $action = Paths::ACTION . Paths::DEFAULT_ACTION;
            $controller = new $controllerName;
            $controller->$action();
        } else {
            $route = trim($route, '/\\');
            $parts = explode('/', $route);
            $path = Paths::HOME . Paths::CONTROLLER_PATH . Paths::CONTROLLER . $parts[0] . '.php';
            if (file_exists($path)) {
                $controllerName = Paths::CONTROLLER . $parts[0];
                $controller = new $controllerName;
                $action = (empty($parts[1])) ? Paths::ACTION . Paths::DEFAULT_ACTION : Paths::ACTION . $parts[1];
                if (method_exists($controller, $action)) {
                    $controller->$action();
                }
            } else {
                //TODO: error
            }
        }
    }
}
