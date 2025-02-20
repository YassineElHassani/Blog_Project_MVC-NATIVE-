<?php
require_once './vendor/autoload.php';
use App\Router\Router;

$uri = $_SERVER['REQUEST_URI'];

$routes = new Router();
$routes->dispatch($uri);
?>