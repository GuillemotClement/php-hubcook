<?php

use Hubcook\Core\Database;
use Hubcook\Core\Router;
use Hubcook\Core\Utils;

session_start();
const BASE_PATH = __DIR__ . '/../';
require BASE_PATH."vendor/autoload.php";
require BASE_PATH."src/Core/functions.php";


require BASE_PATH . "src/utils/routing.php";


$router = new Router();


require BASE_PATH."src/Core/routes.php";

//stocker les variable dans un fichier env
$db = new Database(
  "mysql:host=localhost;dbname=hubcook_php;charset=utf8mb4",
  "root",
  ""
);

//Utils::printAndDie($_SERVER['REQUEST_METHOD']);


$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$router->routeTo($url, $method);


//on ajoute une nouvelle route et on écrase l'ancien tableau contenant toutes les routes
// $routes = addRoute($routes, '/recipe', 'recipe/listRecip', 'GET');
//$routes = routeGet("/login", 'authenticate/login', $routes);



// p($_SERVER['REQUEST_METHOD']);
//routeTo($_SERVER['REQUEST_URI'], $routes, $_SERVER['REQUEST_METHOD']);

