<?php

namespace App\Config;

class Database {

    private static $instance = null;
    private $pdo;

    public function __construct() {
        $this->pdo = new \PDO("mysql:host=localhost;dbname=blog_mvc", "root", "");
    }

    public static function getConnection() {
        if (self::$instance === null) {
            self::$instance = new database();
        }
        return self::$instance->pdo;
    }
}
