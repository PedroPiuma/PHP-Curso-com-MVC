<?php
echo "\nInit echo --------------------------------------\n\n";
require __DIR__ . '/vendor/autoload.php';
/**
 *  A partir do diretório atual, adiciona-se /vendor/autoload.php
 *  Arquivo autoload.php é o arquivo que carrega a definição feita no composer.json
 * 
 *  Sempre que lê SON ele sabe que precisa fazer um include ou require de um arquivo no diretório src
 *  include src\Controller.php
 */

$controller = new SON\Controller;

// Em PHP o operador (->) é usado para acessar proprieda ou método (Similar ao (.) do JS)
echo $controller->handler(); // Retorna o nome da class:  SON\Controller
echo "\n";

$controllers = new App\Controllers\UsersController;
echo $controllers->handler();


echo "\n";
require __DIR__ . '/Router.php';

echo "\n\nEnd echo ---------------------------------------\n\n";
