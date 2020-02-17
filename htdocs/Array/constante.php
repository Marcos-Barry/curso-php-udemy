<?php
define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;
echo "<br><br>";

// esse true na constante indica que é sensitve case, mas para constante uma boa pratica ser tudo e maiusculo entao nao eh recomendado usar sensitive 
define("BANCO_DADOS",[
	"127.0.0.1",
	"root",
	"password",
	"teste",true
]);

print_r(BANCO_DADOS);
echo "<br><br>";

echo PHP_VERSION;


?>