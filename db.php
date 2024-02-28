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
      // echo $this->dbUser . " is connected. Database Connection Successful!";
    } catch (PDOException $e) {
      die("DB Connection failed: " . $e->getMessage());
    }
  }

  public function insertData($name, $email) {
    $sql = "INSERT INTO userdetails (name, email) VALUES (:name, :email)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['name' => $name, 'email' => $email]);
    echo "data inserted";
  }

  public function getData() {
    $sql = "SELECT * FROM userdetails";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC); //retuns data as Associative Array
    return $data;
  }

  public function deleteData($id){
    $sql = "DELETE FROM userdetails WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['id' => $id]);
    echo "ID: " . $id . " was deleted" . "<br>";
    echo $stmt->rowCount() . " row(s) affected";
  }

  public function editData($id, $name){
    $sql = "UPDATE userdetails SET name = :name WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['id' => $id, 'name' => $name]);
   
  }

  public function searchData($name){
    $sql = "SELECT * FROM userdetails WHERE name LIKE :name";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['name' => '%' . $name . '%']);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }
}

?>
