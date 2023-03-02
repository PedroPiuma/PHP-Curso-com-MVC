<?php
$router['/'] = [
    'controller' => App\Controllers\UsersController::class,
    'action' => 'index'
];
/**
 * Cria um array com para o index '/' 
 * e adiciona para esse array as chaves
 * -    controller
 * -    action
 * 
 * controler: 
 * Possui atribuido o valor de string: 'App\Controllers\UsersController'
 * É possível acessar essa string através de:
 *  
 * -    echo ($router['/']['controller']);
 * 
 * action:
 * Possui atribuido a string 'index'
 * Acessível por :
 * -     echo ($router['/']['action']);
 */
echo ('$router["/"]["controller"] retorna: ' . $router['/']['controller']);
echo "\n";
echo ('$router["/"]["action"] retorna: ' . $router['/']['action']);

$router = new SON\Router($router);
/**
 * SON\Route é um ArrayAccess tipado para ser um Array,
 * assim é necessário criar a rota e passar para a classe
 */
return $router;
