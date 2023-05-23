<?php
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PropsController;
use Controllers\LandController;

$router = new Router();

// Property routes
$router->get('/admin', [PropsController::class, 'index']);
$router->get('/properties/create', [PropsController::class, 'create']);
$router->post('/properties/create', [PropsController::class, 'create']);
$router->get('/properties/update', [PropsController::class, 'update']);
$router->post('/properties/update', [PropsController::class, 'update']);
$router->post('/properties/delete', [PropsController::class, 'delete']);

// Landlord routes
$router->get('/landlords/create', [LandController::class, 'create']);
$router->post('/landlords/create', [LandController::class, 'create']);
$router->get('/landlords/update', [LandController::class, 'update']);
$router->post('/landlords/update', [LandController::class, 'update']);
$router->post('/landlords/delete', [LandController::class, 'delete']);

$router->checkRoutes();

