<?php 

function incluirClasses($Automovel){

	if(file_exists("Abstrata".DIRECTORY_SEPARATOR.$Automovel.".php") === true){

		require_once("Abstrata".DIRECTORY_SEPARATOR.$Automovel.".php");
	}

};

spl_autoload_register("incluirClasses");
spl_autoload_register(function($Automovel){

	if(file_exists("Abstrata".DIRECTORY_SEPARATOR.$Automovel.".php") === true){

		require_once("Abstrata".DIRECTORY_SEPARATOR.$Automovel.".php");
	}
});

$carro = new Celta();
$carro ->acelerar(200);


?>