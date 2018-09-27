<?php

//inicializamos un controlador  de errores 
ini_set('display_errors', 1);
ini_set('displau_startup_error', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
include_once '../config.php';

//obtiene la URL base sobre el cual cargara el proyecto
$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
define('BASE_URL', $baseUrl);


//Verifica si hay alguna entrada en la barra de navegacion a parte del URL_BASE
$route = (isset($_GET['route'])) ? $_GET['route'].'/' : '/';



use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();


$router->controller('/student/registry', AppPHP\Controllers\Student\RegistryController::class);

$router->controller('/student', AppPHP\Controllers\Student\IndexController::class);

//$router->controller('/student/registry', AppPHP\Controllers\Student\RegistryController::class);

$router->controller('/teacher', AppPHP\Controllers\Teacher\IndexController::class);

//Crea una ruta para el HOME de la aplicacion
$router->controller('/', AppPHP\Controllers\IndexController::class);

//genera un conte
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo $response;
