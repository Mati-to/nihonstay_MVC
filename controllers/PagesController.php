<?php

namespace Controllers;

use MVC\Router;
use Model\Property;

class PagesController
{
  public static function index(Router $router)
  {
    $properties = Property::getN(3);
    $main = true;

    $router->render('pages/index', [
      'properties' => $properties,
      'main' => $main
    ]);
  }

  public static function aboutUs(Router $router)
  {
    $router->render('pages/about', []);
  }

  public static function properties(Router $router)
  {
    $properties = Property::getN(10);
    $router->render('pages/properties', [
      'properties' => $properties
    ]);
  }

  public static function property(Router $router)
  {
    $id = idVerifier('/properties');
    $property = Property::getById($id);
    if($id !== intval($property->id)) {
      header('Location: /nihonstay_app/views/index.php');
    } 

    $router->render('pages/property', [
      'property' => $property
    ]);
  }

  public static function blog(Router $router)
  {
    $authors1 = [
      [
        'author_url' => 'filizelaerts',
        'author' => 'Filiz Elaerts',
        'url' => '58ApUELd3Ec'
      ],
      [
        'author_url' => 'pepe_nero',
        'author' => 'Pepe Nero',
        'url' => 'JsSM2T9iPRU'
      ],
      [
        'author_url' => 'davidemrich',
        'author' => 'David Emrich',
        'url' => 'JsSM2T9iPRU'
      ],
      [
        'author_url' => 'shaipal',
        'author' => 'Shai Pal',
        'url' => 'LoExSwz2dUI'
      ],
      [
        'author_url' => 'susannschuster',
        'author' => 'Susann Schuster',
        'url' => 'c5yz7Mzfh88'
      ],
      [
        'author_url' => 'xiaocongyan',
        'author' => 'Xiaocong Yan',
        'url' => 'M9NTnUlNiEM'
      ]
    ];
    $authors2 = [
      [
        'author_url' => 'cosmingeorgian',
        'author' => 'Cosmin Georgian',
        'url' => '2T9h1sxR5So'
      ],
      [
        'author_url' => 'renedeanda',
        'author' => 'Rene deAnda',
        'url' => 'XvdtpVmYYuU'
      ],
      [
        'author_url' => 'space_face_films',
        'author' => 'Luke Galloway',
        'url' => 'tuc1Lin_vR8'
      ],
      [
        'author_url' => 'tianshu',
        'author' => 'Tianshu Liu',
        'url' => 'aqZ3UAjs_M4'
      ],
      [
        'author_url' => 'charlesdeluvio',
        'author' => 'Charles Deluvio',
        'url' => 'qF1PhG-59pE'
      ]
    ];

    $router->render('pages/blog', [
      'authors1' => $authors1,
      'authors2' => $authors2
    ]);
  }

  public static function contact(Router $router)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      helper($_POST);
    }


    $router->render('pages/contact', [

    ]);
  }
}
