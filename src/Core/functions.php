<?php

function requireController(string $path): void
{
  require BASE_PATH."src/controllers/$path.php";
}

