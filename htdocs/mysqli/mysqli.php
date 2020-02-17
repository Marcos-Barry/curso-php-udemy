<?php 

$con = new mysqli("localhost", "root", "", "dbphp7");

if($con -> connect_error ){

	echo "Error: ".$con->connect_error;
	exit;
}

$stmt = $con->prepare("insert into tb_usuarios (login, senha) values (?,?)");
$stmt -> bind_param("ss",$login, $pass); // informa o tipo do parametro que sera fornecido , ss pois sao 2 parametros strings (varchar)
$login = "user";
$pass = "12345";
$stmt -> execute();



?>