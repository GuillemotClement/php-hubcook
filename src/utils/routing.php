<?php

use JetBrains\PhpStorm\NoReturn;

function getController(string $nameController): string
{
return BASE_PATH . "src/controllers/$nameController.php";
}

function getView(string $nameView): string
{
return BASE_PATH . "src/views/$nameView.view.php";
}

function getPartial(string $namePartial):string
{
  return BASE_PATH . "src/views/partials/$namePartial.php";
}

#[NoReturn] function logout():void
{
  session_destroy();
  header("Location: /");
  exit();
}