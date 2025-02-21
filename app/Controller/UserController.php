<?php

namespace App\Controller;
use App\Model\User;


class UserController {
    public function index() {
        echo"wach";
    }

    public function login() {
        echo "User Login";
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
            $user = new User;
           
            $user->setDetails($_POST['name'], $_POST['email'], $_POST['password']);
        
            $registerMessage = $user->register();
         
            require 'app/View/register.php';
        }else{
            require 'app/View/register.php';
        }
    }
}


?>