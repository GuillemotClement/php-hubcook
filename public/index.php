<?php
const BASE_PATH = __DIR__ . '/../';

function dd(mixed $value):void
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die();
}

function getController(string $nameController): string
{
  return BASE_PATH . "src/controllers/$nameController.controller.php";
}

function getView(string $nameView): string
{
  return BASE_PATH . "src/views/$nameView.view.php";
}




require getController("homepage");
