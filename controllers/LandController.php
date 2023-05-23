<?php

namespace Controllers;

use MVC\Router;
use Model\Landlord;

class LandController
{
  public static function create(Router $router)
  {
    $landlord = new Landlord;
    $validation = Landlord::getValidation();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $landlord = new Landlord($_POST['landlord']);
      $validation = $landlord->validation();
    
      if(empty($validation)) {
        $landlord->save();
      }
    }
    
    $router->render('landlords/create', [
      'landlord' => $landlord,
      'validation' => $validation
    ]);
  }

  public static function update()
  {
    echo 'Landlord update...';
  }

  public static function delete()
  {
    


  }
}
