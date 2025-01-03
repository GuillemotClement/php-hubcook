<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  $sql = "SELECT * FROM user WHERE user_username LIKE :username";
  $params = [":username" => $username];
  $user = $db->fetchOne($sql, $params);
  if($username === $user['user_username']){
    if($password === $user['user_password']){
      $_SESSION['username'] = $username;
      header("Location: /");
      exit();
//    }else{
//
    }
  }
}


$page = "Connexion";

require getView("authenticate/login");