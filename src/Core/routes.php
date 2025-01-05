<?php


use Hubcook\Core\Router;



$router->addRoute('/', 'homepage', 'GET');
$router->addRoute('/recipe', 'recipe/listRecipe', 'GET');
$router->addRoute("/login", "authenticate/login", "GET");
$router->addRoute("/register", "authenticate/register", "GET");

