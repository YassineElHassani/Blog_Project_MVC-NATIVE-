<?php

namespace App\Controller;
use App\Model\User;


class UserController {
    public function index() {
        echo "User Index";
    }

    public function login() {
        require 'app/View/login.php';
    }

    public function register() {
        echo "User Register";
    }
}


?>