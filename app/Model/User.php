<?php

namespace App\Model;
use Database;

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
   
        $sql = "INSERT INTO Users (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $this->conn->prepare($sql);
  
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
  
        if ($stmt->execute()) {
          return "User registered successfully!";
        } else {
          return "User registration failed!";
        }
      
    }
  }