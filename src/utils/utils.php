<?php

function printValue(mixed $value): void
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

function pd(mixed $value): void
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die();
}
}