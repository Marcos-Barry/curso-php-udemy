<?php

$myid = 66;

$idade = 12;
$maior = 18;
$melhorid = 65;



if($myid < $idade){

	echo "é uma criança";

} elseif($myid < $maior){

	echo "é um adolescente";

} elseif ($myid < $melhorid){
	
	echo "adulto";
} else{

	echo "é um idoso";
}

echo "<br>";


echo ($myid < $maior) ? "menor de idade" : "adulto"
?>