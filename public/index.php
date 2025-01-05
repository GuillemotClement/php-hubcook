<?php

use Hubcook\Core\Database;

session_start();
const BASE_PATH = __DIR__ . '/../';
require BASE_PATH."vendor/autoload.php";
require BASE_PATH."src/Core/functions.php";
require BASE_PATH."src/utils/helpers.php";
require BASE_PATH."src/utils/routing.php";

//stocker les variable dans un fichier env
$db = new Database(
  "mysql:host=localhost;dbname=hubcook_php;charset=utf8mb4",
  "root",
  ""
);


$routes = [
  [
    "path" => "/",
    "controller" => "homepage",
    "method" => "GET"
  ],
];

// p($_SERVER['REQUEST_METHOD']);
routeTo($_SERVER['REQUEST_URI'], $routes, $_SERVER['REQUEST_METHOD']);

