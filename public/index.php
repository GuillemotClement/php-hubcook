<?php

session_start();
const BASE_PATH = __DIR__ . '/../';
require BASE_PATH."src/utils/helpers.php";
require BASE_PATH."src/utils/routing.php";

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



