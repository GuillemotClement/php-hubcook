<?php

function requireController(string $path): void
{
  require BASE_PATH."src/controllers/$path.php";
}

/**
 * Retourne le chemin basique "src/"
 * @return string
 */
function basePath(string $path): string
{
  return BASE_PATH . "src/$path.php";
}

function requirePartial(string $partialName): void
{
  require BASE_PATH."src/views/partials/$partialName.php";
}