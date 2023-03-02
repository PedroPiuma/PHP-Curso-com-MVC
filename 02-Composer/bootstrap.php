<?php
echo "\nInit echo --------------------------------------\n\n";
require __DIR__ . '/vendor/autoload.php';
$router = require __DIR__ . '/router.php';
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
echo $controllers->index();
echo "\n\n";

// $routerController = $router->handler();


// echo "\n";
// require __DIR__ . '/Router.php';

// $_SERVER['SERVER_ADDR']: O endereço IP do servidor
// $_SERVER['SERVER_NAME']: O nome do servidor
// $_SERVER['REQUEST_METHOD']: O método HTTP usado para acessar a página (por exemplo, GET ou POST)
// $_SERVER['REQUEST_URI']: A URI (Uniform Resource Identifier) da página solicitada
// $_SERVER['HTTP_USER_AGENT']: O navegador do usuário que está acessando a página
// $_SERVER['REMOTE_ADDR']: O endereço IP do cliente que está acessando a página
// $_SERVER['DOCUMENT_ROOT']: O caminho raiz do documento da página atual
// $_SERVER['SCRIPT_FILENAME']: O caminho completo e o nome do arquivo do script em execução


// $path = $_SERVER['PATH_INFO'] ?? '/';
// echo '<br><br><br>';
// echo '<br><br>$path aqui: ' . $path . '<br><br>';
// echo '<br><br>$path aqui: ' . strlen($path) . '<br><br>';

echo "\n\n";
$testeExplode = explode('-', 'string-teste');
// echo 'array_pop($testeExplode): ' . array_pop($testeExplode);
// echo "\n\n";
echo '$testeExplode echo 2: ' . $testeExplode[0];
echo "\n\n";
$stringTeste = array_pop($testeExplode);
echo '$stringTeste: ' . $stringTeste;
echo "\n\n";
var_dump($stringTeste);
echo "\n\n";
// echo preg_replace('t', '', $stringTeste); Precisa usar regex para funcionar


// Fornece: Hll Wrld f PHP
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
echo $onlyconsonants;
echo "\n\n";
// Fornece: você comeria pizza, cerveja e sorvete todos os dias
$frase  = "você comeria frutas, vegetais, e fibra todos os dias.";
$saudavel = array("frutas", "vegetais", "fibra");
$saboroso   = array("pizza", "cerveja", "sorvete");

$novafrase = str_replace($saudavel, $saboroso, $frase);
echo $novafrase;
echo "\n\n";


echo "\n\nEnd echo ---------------------------------------\n\n";
