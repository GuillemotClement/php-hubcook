<?php

function dd(mixed $value):void
{
echo '<pre>';
  var_dump($value);
  echo '</pre>';
die();
}

function p(mixed $value):void
{
echo '<pre>';
  var_dump($value);
  echo '</pre>';
}