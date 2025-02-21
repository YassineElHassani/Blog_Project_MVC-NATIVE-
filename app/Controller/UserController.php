<?php

namespace App\Controller;
use App\Model\User;


class UserController {
    public function index() {
        require 'app/View/index.php';
    }

    public function login() {
        require 'app/View/login.php';
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