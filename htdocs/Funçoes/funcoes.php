<?php 


// valores de parametros obrigatorios manter a esquerda 
function ola($texto = "mundo", $b = "bom dia"){

	return "OLa $texto! $b <br>";
}

echo ola();
echo ola("");

?>