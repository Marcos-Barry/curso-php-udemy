<?php

// quando um array tem somente uma dimensao eh chamado de vetor
$frutas = array("laranja", "abacaxi", "melancia");


print_r($frutas);

// exemplo de array bidimensional
// Neste caso o primeiro indice é a montadora e o segundo indice é o modelo do carro

$carros[0][0] = "GM";
$carros[0][1] = "COBALT";	
$carros[0][2] = "CAMARO";
$carros[0][3] = "ONIX";

$carros[1][0] = "FORD";
$carros[1][1] = "FUSION";	
$carros[1][2] = "ECOSPORT";
$carros[1][3] = "FIESTA";

echo "<br>";
echo $carros[0][3];	
echo "<br>";
echo end($carros[1]); // nesse comando end mostra o ultimo modelo modelo de carro da categoria ford
?>