<?php

namespace App\Router;

class Router {
    private $routes = [
        '/' => ['App\Controller\UserController', 'index'],
        '/login' => ['App\Controller\UserController', 'login'],
        '/register' => ['App\Controller\UserController', 'register'],
        '/dashboard' => ['App\Controller\DashboardController', 'index']
    ];

    public function dispatch($uri) {
        if(array_key_exists($uri, $this->routes)) {
            $controllerName = $this->routes[$uri][0];
            $methodName = $this->routes[$uri][1];

            $controller = new $controllerName(); 
            $controller->$methodName();
        } else {
            echo '404 Not Found';
        }
    }
}

?>