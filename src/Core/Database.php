<?php

namespace Hubcook\Core;

use PDO;
use PDOException;

class Database
{
  protected string $dsn;
  protected string $user;
  protected string $pwd;
  protected ?PDO $connexion = null; //stockage de la connexion PDO

  public function __construct(string $dsn, string $user, string $pwd)
  {
    $this->dsn = $dsn;
    $this->user = $user;
    $this->pwd = $pwd;
  }

  //méthode de connexion à la DB
  public function connect(): PDO
  {
    if($this->connexion === null){
      try{
        $this->connexion = new PDO($this->dsn, $this->user, $this->pwd, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
      }catch(PDOException $e){
        throw new PDOException("Erreur de connexion :" . $e->getMessage());
      }
    }
    return $this->connexion;
  }

}