<?php

class DB {
  private $dbHost = "xnmxviali589.db.solnet.ch";
  private $dbUser = "pdotester";
  private $dbPassword = "password1";
  private $dbName = "pdosql";
  private $conn;

  public function __construct() {
    try{
      $dsn = "mysql:host=" . $this->dbHost . ";dbname=". $this->dbName;
      $this->conn = new PDO($dsn, $this->dbUser, $this->dbPassword);
      echo "Database Connection Successful";
    } catch (PDOException $e) {
      die("DB Connection failed: " . $e->getMessage());
    }
  }
}

?>
