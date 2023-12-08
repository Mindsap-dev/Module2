<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



//if ($uri === '/index.php'){
//    require 'controllers/index.php';
//} else if ($uri === '/about.php') {
//    require 'controllers/about.php';
//}  else if ($uri === '/contact.php') {
//    require 'controllers/contact.php';
//}  else if ($uri === '/ourmission.php') {
//    require 'controllers/ourmission.php';
//}

$routes = [
'/index.php' => 'controllers/index.php',
'/about.php' => 'controllers/about.php',
'/contact.php' => 'controllers/contact.php',
'/ourmission.php' => 'controllers/ourmission.php',
];


function routeToController($uri, $routes)
{
if (array_key_exists($uri, $routes)) {
require $routes[$uri];
} else {
abort();
}
}

function abort() {
http_response_code(404);

require 'views/404.php';

die();
}

routeToController($uri, $routes);