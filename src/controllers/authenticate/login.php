<?php

//p($_REQUEST);
//p($_SERVER);
$dataUser = [
  "username" => "gizmo",
  "password" => "123456"
];

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if($username === $dataUser['username']){
    if($password === $dataUser['password']){
      $_SESSION['username'] = $username;
    }else{
      header("Location: /");
      exit();
    }
  }
}


$page = "login page";

require getView("authenticate/login");
