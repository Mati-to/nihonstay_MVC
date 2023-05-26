<?php

namespace MVC;

class Router
{
  public $routesGET = [];
  public $routesPOST = [];

  public function get($url, $fx)
  {
    $this->routesGET[$url] = $fx;
  }

  public function post($url, $fx)
  {
    $this->routesPOST[$url] = $fx;
  }

  public function checkRoutes()
  {
    session_start();
    $auth = $_SESSION['login'] ?? null;

    $protected_routes = [
      '/admin', '/properties/create', '/properties/update', '/properties/delete',
      '/landlords/create', '/landlords/update', '/landlords/delete'
    ];

    $url = $_SERVER['PATH_INFO'] ?? '/';
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'GET') {
      $fx = $this->routesGET[$url] ?? null;
    } else {
      $fx = $this->routesPOST[$url] ?? null;
    }

    if (in_array($url, $protected_routes) && !$auth) {
      header('Location: /login');
    }

    if ($fx) {
      call_user_func($fx, $this);
    } else {
      echo '404 Page Not Found';
    }
  }

  public function render($view, $data = [])
  {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    ob_start();
    include __DIR__ . "/views/{$view}.php";
    $pageContent = ob_get_clean();
    include __DIR__ . "/views/layout.php";
  }
}
