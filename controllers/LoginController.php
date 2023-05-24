<?php

namespace Controllers;
use MVC\Router;
use Model\Admin;

class LoginController {
  public static function login(Router $router) {
    
    $router->render('pages/login', []);
  }

  public static function logout() {
    echo 'Desde el logout...';
  }
}

