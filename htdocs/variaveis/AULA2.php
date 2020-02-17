<?php

$nome = "MARCOS ";
$sobrenome = "VINICIUS";

$nomeCompleto = $nome. " ".$sobrenome;

// NAO SE USA NUMERO NO INICIO DO NOME DE UMA VARIAVEL
// ATE PODE ESTAR NO MEIO OU NO FINAL DO NOME , MAS JAMAIS NO INICIO 

echo $nomeCompleto;

// trava a execuçao aqui 
exit;
echo "<br>";


// ESSE COMANDO LIMPA A VARIAVEL DA MEMORIA OU SEJA EXCLUI A VARIAVEL
unset($nomeCompleto);


//VERIFICA SE A VARIAVEL EXISTE 
if(isset($nomeCompleto)){

	echo $nomeCompleto;
}
?>