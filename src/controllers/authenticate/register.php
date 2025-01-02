<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $username = $_REQUEST['username'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $confirmPassword = $_REQUEST['confirmPassword']
}

$page = "Inscription";

require getView("authenticate/register");

