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

      if (empty($validation)) {
        $landlord->save();
      }
    }

    $router->render('landlords/create', [
      'landlord' => $landlord,
      'validation' => $validation
    ]);
  }

  public static function update(Router $router)
  {
    $id = idVerifier('/admin');
    $landlord = Landlord::getById($id);
    $validation = Landlord::getValidation();

    if ($id !== intval($landlord->id)) {
      header('Location: /admin');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $arr = $_POST['landlord'];
      $landlord->sync($arr);
     
      $validation = $landlord->validation();
    
      if(empty($validation)) {
        $landlord->save();
      }
    }

    $router->render('landlords/update', [
      'landlord' => $landlord,
      'validation' => $validation
    ]);
  }

  public static function delete()
  {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id = $_POST['deleteId'];
      $id = filter_var($id, FILTER_VALIDATE_INT);

      if($id) {
        $type = $_POST['type'];
        if (checkClassType($type)) {
          $landlord = Landlord::getById($id);
          $landlord->delete();
        }
      }
    }
  }
}
