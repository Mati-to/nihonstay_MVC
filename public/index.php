<?php
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PropsController;

$router = new Router();

$router->get('/admin', [PropsController::class, 'index']);
$router->get('/properties/create', [PropsController::class, 'create']);
$router->get('/properties/update', [PropsController::class, 'update']);

$router->checkRoutes();

