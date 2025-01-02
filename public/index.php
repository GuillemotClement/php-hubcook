<?php

use Hubcook\Core\Database;

session_start();
const BASE_PATH = __DIR__ . '/../';
require BASE_PATH."vendor/autoload.php";

require BASE_PATH."src/utils/helpers.php";
require BASE_PATH."src/utils/routing.php";


$db = new Database(
  "mysql:host=localhost;dbname=hubcook_php;charset=utf8mb4",
  "root",
  ""
);

$sql = "SELECT * FROM user";

//$user = $db->fetchOne($sql);
//p($user);

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



