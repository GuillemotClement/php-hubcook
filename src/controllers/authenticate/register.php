<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $username = $_REQUEST['username'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $confirmPassword = $_REQUEST['confirmPassword'];

  if($password === $confirmPassword){
    $sql = "INSERT INTO user (user_username, user_email, user_password, role_id) VALUES (:username, :email, :password, 2)";
    $params = [
      'username' => $username,
      'email' => $email,
      'password' => $password,
    ];
    $statement = $db->connect()->prepare($sql);
    $statement->execute($params);
  }else{
    p("La confirmation du mot de passe à échouée");
  }
}

$page = "Inscription";

require getView("authenticate/register");

