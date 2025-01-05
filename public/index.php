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

$uri = getUri($_SERVER['REQUEST_URI']);

$routes = [
  [
    "path" => "/",
    "controller" => BASE_PATH."src/homepage.php",
    "method" => "GET"
  ],
];








//function getUri($_SERVER['REQUEST_URI']){
//
//  return $uri
//}
//implémentation du router

//récupérer de l'uri depuis l'url

//créer un tableau contenant les différents routes

//router vers le bon controller & méthode





$uri = $_SERVER["REQUEST_URI"];

if($uri === "/login"){
  require getController("authenticate/login");
}else if($uri === "/logout"){
  logout();
}else if($uri === "/register"){
  require getController("authenticate/register");
}else{
  require getController("homepage");
}



