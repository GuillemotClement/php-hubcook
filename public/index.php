<?php

session_start();
const BASE_PATH = __DIR__ . '/../';
require BASE_PATH."src/utils/helpers.php";
require BASE_PATH."src/utils/routing.php";


p("Session");
p($_SESSION);

$uri = $_SERVER["REQUEST_URI"];

if($uri === "/login"){
  require getController("authenticate/login");
}else if($uri === "/logout"){
  logout();
}else{
  require getController("homepage");
}



