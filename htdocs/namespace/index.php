<?php 

require_once("config.php");
use Cliente\Cadastro;


$cad = new Cadastro();

$cad->setNome("Barry Allen");
$cad->setEmail("barry@flash.com");
$cad->setSenha("mariaAlice");

echo $cad;

echo "<br>";

$cad->registrarVenda();

?>