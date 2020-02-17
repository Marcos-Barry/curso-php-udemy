<?php

$condicao = true;

while ($condicao) {

	// random em php 
	$n1 = rand(1,10);
	if ($n1 === 3) {
		
		echo "TRES";
		$condicao = false;
	}else{

		echo $n1." ";
	}
	
}

echo "<br><br>";




?>