<?php

$con = new PDO("mysql:dbname=dbphp7;host=localhost", "root" ,"");

$con->beginTransaction();

$stmt= $con->prepare("DELETE FROM  tb_usuarios  WHERE idusuario = ?");

$id = 1;

$stmt->bindParam(":ID",$id);
$stmt->execute(array($id));

//$con->rollback();	
$con->commit();
echo "DELETADO COM SUCESSO";





?>