<?php
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PropsController;

$router = new Router();

$router->get('/admin', [PropsController::class, 'index']);
$router->get('/properties/create', [PropsController::class, 'create']);
$router->post('/properties/create', [PropsController::class, 'create']);
$router->get('/properties/update', [PropsController::class, 'update']);
$router->post('/properties/update', [PropsController::class, 'update']);
$router->post('/properties/delete', [PropsController::class, 'delete']);

$router->checkRoutes();

