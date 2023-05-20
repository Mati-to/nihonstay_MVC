<?php

require 'functions.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

$db = connectionDB();

use Model\ActiveRecord;

ActiveRecord::setDB($db);

