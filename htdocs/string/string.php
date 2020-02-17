<?php


$nome = "hcode";
// interpolacao da variavel
// recurso do php que verifica se tem alguma variavel no meio da texto ao usar aspas duplas 

$nome2 = 'treinamentos';

var_dump($nome);
echo "<br>";
var_dump($nome2);
echo "<br>";

// funçao para colocar texto em letra maiuscula strtoupper

$nome = "marcos vinicius";

echo strtoupper($nome);
echo "<br>";

// funcao para colocar texto em letra minuscula strtolower

echo strtolower($nome);
echo "<br>";

// funcao para colocar a primeira letra do texto em maiusculo ucwords

echo ucwords($nome);
echo "<br>";

//funcao para deixar apenas a primeira palavra com a primeira letra maiuscula  ucfirst

echo ucfirst($nome);
echo "<br>";


// funcao para substituir conteudo de um texto ou palavra str_replace
$empresa = "Hcode";
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
echo($empresa);
echo "<br>";


$frase = "a repeticao é mae da retençao";
$palavra = "mae";
// strpos retorna posicao da palavra dentro de um texto
$q = strpos($frase, "mae");

var_dump($q);
echo "<br>";

// seleciona uma parte do texto 
$texto = substr($frase, 0, $q);
echo "<br>";

// strlen conta os caracteres 
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase) );


echo "<br>";

var_dump($texto2);




?>