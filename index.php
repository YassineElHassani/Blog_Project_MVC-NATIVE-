<?php
require_once './vendor/autoload.php';
use App\Router\Router;

$uri = $_SERVER['REQUEST_URI'];
$uri = str_replace('/Blog_Project_MVC-NATIVE-','',$uri);

$routes = new Router();
$routes->dispatch($uri);
?>