<?php

namespace Hubcook\Core;

class Utils
{
  public static function printAndDie(mixed $value): void
  {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
  }

  public static function printValue(mixed $value): void
  {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
  }
}


