<?php

namespace App\Router;

use App\Controller\DashboardController;
use App\Controller\UserController;

class Router {
    private $routes = [
        '/' => [UserController::class, 'index'],
        '/login' => [UserController::class, 'login'],
        '/register' => [UserController::class, 'register'],
        '/dashboard' => [DashboardController::class, 'index'],
        '/users' => [DashboardController::class, 'users'],
        '/createArticles' => [DashboardController::class, 'createArticles']
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