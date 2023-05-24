<?php
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PropsController;
use Controllers\LandController;
use Controllers\PagesController;

$router = new Router();

// Property CRUD routes
$router->get('/admin', [PropsController::class, 'index']);
$router->get('/properties/create', [PropsController::class, 'create']);
$router->post('/properties/create', [PropsController::class, 'create']);
$router->get('/properties/update', [PropsController::class, 'update']);
$router->post('/properties/update', [PropsController::class, 'update']);
$router->post('/properties/delete', [PropsController::class, 'delete']);

// Landlord CRUD routes
$router->get('/landlords/create', [LandController::class, 'create']);
$router->post('/landlords/create', [LandController::class, 'create']);
$router->get('/landlords/update', [LandController::class, 'update']);
$router->post('/landlords/update', [LandController::class, 'update']);
$router->post('/landlords/delete', [LandController::class, 'delete']);

// Public routes
$router->get('/home', [PagesController::class, 'index']);
$router->get('/about-us', [PagesController::class, 'aboutUs']);
$router->get('/properties', [PagesController::class, 'properties']);
$router->get('/property', [PagesController::class, 'property']);
$router->get('/blog', [PagesController::class, 'blog']);
$router->get('/contact', [PagesController::class, 'contact']);
$router->post('/contact', [PagesController::class, 'contact']);

$router->checkRoutes();

