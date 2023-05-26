<?php

namespace Controllers;

use MVC\Router;
use Model\Admin;

class LoginController
{
  public static function login(Router $router)
  {
    $validation = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $admin = new Admin($_POST);
      $validation = $admin->validation();

      if (empty($validation)) {
        $result = $admin->isAuth();

        if (!$result) {
          $validation = Admin::getValidation();
        } else {
          $auth = $admin->checkPassword($result);
          if ($auth) {
            $admin->auth();
          } else {
            $validation = Admin::getValidation();
          }
        }
      }
    }

    $router->render('auth/login', [
      'validation' => $validation,
      'auth' => $auth
    ]);
  }

  public static function logout()
  {
    session_start();
    $_SESSION = [];
    header('Location: /home');
  }
}
