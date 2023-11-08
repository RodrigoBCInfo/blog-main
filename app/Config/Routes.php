<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('users', 'UserController::index');
$routes->get('users/usuarios', 'UserController::usuarios');
$routes->get('users/usuarios2', 'UserController::usuarios2');
$routes->get('users/usuarios3', 'UserController::usuarios3');

$routes->get('posts/01', 'PostController::ejercicio01');
$routes->get('posts/02', 'PostController::ejercicio02');

$routes->get('posts/05', 'PostController::ejercicio05');
$routes->get('posts/06', 'PostController::ejercicio06');
$routes->get('posts/07', 'PostController::ejercicio07');
$routes->get('posts/08', 'PostController::ejercicio08');
$routes->get('posts/09', 'PostController::ejercicio09');
$routes->get('posts/10', 'PostController::ejercicio10');
$routes->get('posts/02', 'EController::exportarexcel');