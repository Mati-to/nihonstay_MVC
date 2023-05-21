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

  public function checkRoutes()
  {
    $url = $_SERVER['PATH_INFO'] ?? '/';
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'GET') {
      $fx = $this->routesGET[$url] ?? null;
    }
    if ($fx) {
      call_user_func($fx, $this);
    } else {
      echo 'Página no encontrada...';
    }
  }  

  public function render($view, $data = [])
  {
    foreach($data as $key => $value) {
      $$key = $value;
    }

    ob_start();
    include __DIR__ . "/views/{$view}.php";
    $pageContent = ob_get_clean();
    include __DIR__ . "/views/layout.php";
  }
}

