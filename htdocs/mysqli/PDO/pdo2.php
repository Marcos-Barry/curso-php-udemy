<?php

$con = new PDO("mysql:dbname=dbphp7;host=localhost", "root" ,"");

$stmt = $con -> prepare("INSERT INTO tb_usuarios (login,senha) VALUES (:LOGIN, :PASSWORD) ");

$login = "barry";
$password = "123456";

$stmt->bindParam(":LOGIN",$login); // essa funcao ta ligando o valor da variavel login com o parametro login que sera inserido
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Inserido OKAY";





?>