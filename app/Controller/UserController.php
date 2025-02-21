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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
            $user = new User;
           
            $user->setDetails($_POST['name'], $_POST['email'], $_POST['password']);
        
            $registerMessage = $user->register();

            if($registerMessage) {
                header('location: app/View/login.php');exit;
            } else {
                return "User registration failed!";
            }
        }else{
            require 'app/View/register.php';
        }
    }

}


?>