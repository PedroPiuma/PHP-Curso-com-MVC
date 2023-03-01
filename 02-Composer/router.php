<?php
$router['/'] = [
    'controller' => App\Controllers\UsersController::class,
    'action' => 'index'
];

$router = new SON\Router($router);
/**
 * SON\Route é um ArrayAccess tipado para ser um Array,
 * assim é necessário criar a rota e passar para a classe
 */
return $router;
