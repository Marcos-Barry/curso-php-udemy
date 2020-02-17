<?php

$con = new PDO("mysql:dbname=dbphp7;host=localhost", "root" ,"");

$stmt= $con->prepare("UPDATE tb_usuarios SET login = :LOGIN,senha = :PASSWORD WHERE idusuario = :ID");

$login = "Bart";
$password = "123456";
$id = 2;


$stmt->bindParam(":LOGIN",$login); // essa funcao ta ligando o valor da variavel login com o parametro login que sera inserido
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);
$stmt->execute();

echo "ALTERADO";





?>