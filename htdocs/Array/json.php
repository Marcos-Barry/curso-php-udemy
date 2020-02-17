<?php

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Joao',
	'idade'=> 20
	));

array_push($pessoas, array(
	'nome' => 'Thais',
	'idade'=> 29
	));

echo json_encode($pessoas);

?>