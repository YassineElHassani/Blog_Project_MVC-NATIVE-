<?php

namespace App\Controller;

use App\Model\User;
use App\Model\Article;

class DashboardController {
    
    public function index() {
        require 'app/View/dashboard.php';
    }

    public function users() {
        $users = new User;
        $a = $users->getUsers();
        require 'app/View/users.php';
    }

    public function createArticles() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
            $article = new Article();

            $article->setArticle($_POST['title'], $_POST['image'], $_POST['content']);
        
            $registerMessage = $article->addArticle();

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