<?php


use Hubcook\Router\Router;
use Hubcook\Helper\DisplayHelper;

const BASE_PATH = __DIR__ . "/../";
//importation de l'autoload
require BASE_PATH.'vendor/autoload.php';
$router = new Router();
//placer sous le routeur pour rendre disponible la méthode de la classe pour ajouter de nouvelle routes
require BASE_PATH.'routes.php';



$displayRoute = $router->getRoutes();


DisplayHelper::printAndDie($displayRoute);
