<?php

namespace Controllers;

use MVC\Router;
use Model\Property;
use Model\Landlord;
use Intervention\Image\ImageManagerStatic as Image;

class PropsController
{
  public static function index(Router $router)
  {
    $properties = Property::getAll();
    $landlords = Landlord::getAll();

    $getResult = $_GET['result'] ?? null;

    $router->render('properties/admin', [
      'properties' => $properties,
      'getResult' => $getResult,
      'landlords' => $landlords
    ]);
  }

  public static function create(Router $router)
  {
    $property = new Property;
    $landlords = Landlord::getAll();
    $validation = Property::getValidation();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      /* Creates a new instance of Property when the request 
      method is POST */
      $property = new Property($_POST['property']);

      /* Creates a unique name for each image, then this reference
      is stored in the DB */
      $imageName = md5(uniqid('')) . '.jpg';

      /* Validates if the image exists, then I resize the image 
      given by the user, and then it sets the name reference 
      of the image to the atribute on the class */
      if ($_FILES['property']['tmp_name']['image']) {
        $img = Image::make($_FILES['property']['tmp_name']['image'])->fit(800, 600);
        $property->setImage($imageName);
      }

      $validation = $property->validation();

      if (empty($validation)) {

        if (!is_dir(IMAGES_FOLDER)) {
          mkdir(IMAGES_FOLDER);
        }

        // Stores the img file in the Server
        $img->save(IMAGES_FOLDER . $imageName);

        // Save the object into the DB
        $property->save();
      }
    }

    $router->render('properties/create', [
      'property' => $property,
      'landlords' => $landlords,
      'validation' => $validation
    ]);
  }

  public static function update(Router $router)
  {
    $id = idVerifier('/admin');
    $property = Property::getById($id);
    $landlords = Landlord::getAll();
    $validation = Property::getValidation();

    if ($id !== intval($property->id)) {
      header('Location: /admin');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $arr = $_POST['property'];
      $property->sync($arr);

      $validation = $property->validation();

      $imageName = md5(uniqid('')) . '.jpg';

      if ($_FILES['property']['tmp_name']['image']) {
        $img = Image::make($_FILES['property']['tmp_name']['image'])->fit(800, 600);
        $property->setImage($imageName);
      } else {
        $imageName = $property->image;
      }

      if (empty($validation)) {
        if ($_FILES['property']['tmp_name']['image']) {
          $img->save(IMAGES_FOLDER . $imageName);
        }
        $property->save();
      }
    }

    $router->render('properties/update', [
      'property' => $property,
      'landlords' => $landlords,
      'validation' => $validation
    ]);
  }

  public static function delete()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $id = $_POST['deleteId'];
      $id = filter_var($id, FILTER_VALIDATE_INT);

      if ($id) {
        $type = $_POST['type'];
        if (checkClassType($type)) {
          $property = Property::getById($id);
          $property->delete();
        }
      }
    }
  }
};
