<?php

use Dotenv\Dotenv;
use Hubcook\Core\Database;
use Hubcook\Core\Router;

session_start();

const BASE_PATH = __DIR__ . "/../";
//récupère la fonction getFile()
require BASE_PATH . "src/Core/functions.php";
//récupération de l'autolad
getFile("vendor/autoload");

//récupération des variables d'environnement
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

//initialisation de la connexion avec la classe
$pdo = new Database();

$router = new Router();
$router->addRoute("/", "homepage", "GET");
$router->addRoute("/recipe", "recipe/listRecipe", "GET");
$router->addRoute("/login", "authenticate/login", "GET");
$router->addRoute("/register", "authenticate/register", "GET");

$router->routeTo($_SERVER["REQUEST_URI"], $_SERVER["REQUEST_METHOD"]);
