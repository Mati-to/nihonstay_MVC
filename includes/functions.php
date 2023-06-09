<?php

define('FUNCTIONS_PATH', __DIR__ . 'functions.php');
define('IMAGES_FOLDER', $_SERVER['DOCUMENT_ROOT'] . 'images/');


function isAuthenticated(): bool
{
  session_start();
  if (!$_SESSION['login']) {
    header('Location: /nihonstay_app/views/login.php');
  }
  return true;
}

function sanitize($html): string | int
{
  $s = htmlspecialchars($html);
  return $s;
}

function helper($variable)
{
  echo '<pre>';
  var_dump($variable);
  echo '</pre>';
  exit;
}

function checkClassType($type)
{
  $types = ['landlord', 'property'];
  return in_array($type, $types);
}

function idVerifier(string $url): int
{
  $id = $_GET['id'];
  $id = filter_var($id, FILTER_VALIDATE_INT);
  if (!$id) {
    header("Location: {$url}");
  }
  return $id;
}

function showFeedback(int $code): string
{
  $message = '';
  switch ($code) {
    case 1:
      $message = 'Created Successfully';
      break;
    case 2:
      $message = 'Updated Successfully';
      break;
    case 3:
      $message = 'Deleted Successfully';
      break;
    default:
      $message = false;
      break;
  }
  return $message;
}
