<?php

namespace App\Model;
use App\Config\Database;

class User {
    
    private $name;
    private $email;
    private $password;
    private $conn;
   
    public function __construct() {
      $this->conn = Database::getConnection();
    }
  
   
    public function setDetails($name, $email, $password) {
      $this->name = $name;
      $this->email = $email;
      $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function register() {
        $stmt = $this->conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        return $stmt->execute();
    }

    public function getUsers() {
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }

}