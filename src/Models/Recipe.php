<?php

namespace Hubcook\Models;

use Hubcook\Core\Database;
use PDOStatement;

class Recipe extends Database
{
    function listRecipes(): PDOStatement
    {
        return $this->fetchAll("recipe");
    }
}
