<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function connectionDB(): mysqli
{
   $dbHost = $_ENV['DB_HOST'];
   $dbUsername = $_ENV['DB_USER'];
   $dbPassword = $_ENV['DB_PASSWORD'];
   $dbName = $_ENV['DB_NAME'];
   $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   if (!$db) {
      echo 'Connection to database failed';
      exit;
   }
   return $db;
}
