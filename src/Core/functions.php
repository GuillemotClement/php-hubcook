<?php

/**
 *Fonction permet de retourner un fichier.
 **/
function getFile(string $fileName): void
{
    require BASE_PATH . "$fileName.php";
}

function requireController(string $path): void
{
    require BASE_PATH . "src/controllers/$path.php";
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
    require BASE_PATH . "src/views/partials/$partialName.php";
}

function printValue(mixed $value): void
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function printAndDie(mixed $value): void
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
