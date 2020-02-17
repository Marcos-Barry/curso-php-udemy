<?php


$nome = (int)$_GET['a'];

var_dump($nome);

//////////////////////////

// pega o ip do usuario 
$ip = $_SERVER['REMOTE_ADDR'];

echo $ip; 

$ip = $_SERVER['SCRIPT_NAME'];

echo $ip; 



?>