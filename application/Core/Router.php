<?php

namespace App\Core;

/**
 * Class Router
 * @package App\Core
 */
class Router
{

    /**
     * Parse url
     */
    function start()
    {
        $route = (empty($_GET['route'])) ? 'index' : $_GET['route'];
        unset ($_GET['route']);
        if ($route == 'index') {    //if root url, call default controller and action
            $controllerName = Paths::DEFAULT_CONTROLLER;
            $action = Paths::DEFAULT_ACTION;
            $classPath = "\\App\Controllers\\$controllerName";
            $controller = new $classPath;
            $controller->$action();
        } else {
            $route = trim($route, '/\\');
            $parts = explode('/', $route);
            $path = __DIR__ . "/../" . Paths::CONTROLLER_PATH . ucfirst($parts[0]) . '.php';
            if (file_exists($path)) {
                $controllerName = ucfirst($parts[0]);
                $classPath = "\\App\Controllers\\$controllerName";
                $controller = new $classPath;
                $action = (empty($parts[1])) ? Paths::DEFAULT_ACTION : $parts[1];
                if (method_exists($controller, $action)) {
                    $controller->$action();
                }
            } else {
                header('HTTP/1.1 404 Not Found');
                header("Status: 404 Not Found");
                header('Location: /error');
            }
        }
    }
}
