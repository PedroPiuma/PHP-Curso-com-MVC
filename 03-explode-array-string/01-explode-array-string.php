<?php
echo "\nInit echo --------------------------------------\n\n";
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


$arrayOfNumber = [694, 4, 649, 946, 321, 84216879, 3, 987498, 151, 9451];
foreach ($arrayOfNumber as $arrayOfNumber => $value) {
    // Por que precisa do "as"
    $parameters[] = $value;
}
echo "\n\n";

$arrayN = [1, 2, 3];
$arrayN[] = 4;
var_dump($arrayN);

echo "\n\nEnd echo ---------------------------------------\n\n";
