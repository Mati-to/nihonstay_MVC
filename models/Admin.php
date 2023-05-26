<?php

namespace Model;

class Admin extends ActiveRecord
{
  protected static $table = 'users';
  protected static $columns = ['id', 'email', 'password'];

  public $id;
  public $email;
  public $password;

  public function __construct($arg = [])
  {
    $this->id = $arg['id'] ?? null;    
    $this->email = $arg['email'] ?? '';    
    $this->password = $arg['password'] ?? '';    
  }

  public function validation() {
    if (!$this->email) {
      self::$validation[] = 'You must provide an email';
    }
    if (!$this->password) {
      self::$validation[] = 'You must provide a password';
    }
    return self::$validation;
  }

  public function isAuth() {
    $query = "SELECT * FROM	users WHERE email = '" . $this->email . "' LIMIT 1";

    $result = self::$db->query($query);
    if(!$result->num_rows){
      self::$validation[] = 'Email or password incorrect';
      return;
    }
    return $result;
  }

  public function checkPassword($result) {
    $user = $result->fetch_object();
    $pwordSanitize = self::$db->escape_string($user->password);

    $auth = password_verify($this->password, $pwordSanitize);
    if(!$auth) {
      self::$validation[] = 'Email or password incorrect';
    } 
    return $auth;
  }

  public function auth() {
    session_start();

    $_SESSION['user'] = $this->email;
    $_SESSION['login'] = true;

    header('Location: /admin');
  }
}

