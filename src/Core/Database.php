<?php

namespace Hubcook\Core;

use PDO;
use PDOException;
use PDOStatement;

class Database
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = $this->getPdo();
    }

    protected function getPdo(): PDO
    {
        try {
            $db = new PDO($_ENV["DSN"], $_ENV["USER_DB"], $_ENV["PWD_DB"], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            echo "La connexion à la base de donnée à échouée : " .
                $e->getMessage();
        }
        return $db;
    }

    public function query(string $sql, array $parameters = []): PDOStatement
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($parameters);
        return $stmt;
    }

    public function fetchAll(string $table): PDOStatement
    {
        $sql = "SELECT * FROM $table";
        return $this->query($sql);
    }
}
