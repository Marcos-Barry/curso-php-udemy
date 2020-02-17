<?php 

function __autoload($Celta){

	require_once("Celta.php");
	

};

$carro = new Celta();
$carro ->acelerar(200);


?>