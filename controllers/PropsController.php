<?php

namespace Controllers;
use MVC\Router;
use Model\Property;

class PropsController {
  public static function index(Router $router) {

    $properties = Property::getAll();

    $router->render('props/admin', [ 
      'properties' => $properties
    ]);
  }
  
  public static function create(Router $router){
    
    $router->render('properties/create', [
      ''
    ]);
  }

  public static function update(){
    echo 'Editar propiedad...';
  }
}

