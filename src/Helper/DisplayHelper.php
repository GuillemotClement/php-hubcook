<?php

namespace Hubcook\Helper;

use JetBrains\PhpStorm\NoReturn;

class DisplayHelper
{
  /**
   * Affiche une valeur formatée dans des balises pre en utilisant var_dump.
   *
   * @param mixed $value La valeur à afficher
   *
   * @return void
   */
  public static function print(mixed $value): void
  {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
  }

  /**
   * Affiche une valeur formatée dans des balises pre en utilisant var_dump et arrête l'exécution du script.
   *
   * @param mixed $value La valeur à afficher
   *
   * @return void
   */
  #[NoReturn]
  public static function printAndDie(mixed $value): void
  {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
  }
}