<?php


$nome = 'marcos';

function teste(){

	global $nome;
	echo $nome;
}

teste();

?>