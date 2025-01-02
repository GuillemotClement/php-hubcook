<?php
p($_SESSION);
//p($_REQUEST);
//p($_SERVER);
//$dataUser = [
//  "username" => "gizmo",
//  "password" => "123456"
//];

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  $sql = "SELECT * FROM user WHERE user_username LIKE :username";
  $params = [":username" => $username];
  $user = $db->fetchOne($sql, $params);
  p($user);
  if($username === $user['user_username']){
    if($password === $user['user_password']){
      $_SESSION['username'] = $username;
    }else{
      header("Location: /");
      exit();
    }
  }
}


$page = "login page";

require getView("authenticate/login");
