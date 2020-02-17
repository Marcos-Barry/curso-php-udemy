<?php

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select('SELECT * FROM tb_usuarios');

echo json_encode($usuarios);

*/


// Carrega os dados de um usuario
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Carrega uma lista com todos usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//$search = Usuario::search("a");
//echo json_encode($search);


//$usuario = new Usuario();
//$usuario->login("root","barry532");
//echo $usuario;

/* insert atraves de uma procedure 
$aluno = new Usuario("maria","@alice");
$aluno->insert();
echo $aluno;
*/


/* fazendo um update 
$usuario = new Usuario();
$usuario->loadById(4);

$usuario->update("professor","@#$$#@");

echo $usuario;

*/

$usuario = new Usuario();
$usuario->loadById(3);

echo $usuario;


?>
