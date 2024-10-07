<?php

declare(strict_types=1);

//namespace App\Controlers;
require '../Core/Router.php';

// use Gandalf\Router;
$router = new Router();

// echo get_class($router);

// add routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
//$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');

$url = $_SERVER['QUERY_STRING'];

$url = ltrim($url, '/');

//if (substr($url, 0, 1) === '/') {
//    $url = substr($url, 1);
//}

if ($router->match($url)) {
    echo '<pre>';
    var_dump($router->getParams());
    echo '</pre>';
} else {
    echo "No route found for URL '$url'";
}