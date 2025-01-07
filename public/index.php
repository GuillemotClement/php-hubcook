<?php


use Hubcook\Helper\DisplayHelper;

const BASE_PATH = __DIR__ . "/../";
//importation de l'autoload
require BASE_PATH.'vendor/autoload.php';


DisplayHelper::printAndDie($_SERVER);
