<?php

// include : tenta funcionar o codigo mesmo que o arquivo a ser incluido nao exista ou esteja com algum tipo de problema , alem de possuir mais recursos 

//include "include.php";


// required : obriga que o arquivo a ser incluido extista e que o arquivo esteja funcionando corretamente 

// required_once ou include_once , chama o arquivo ou funçao apenas uma vez evitando conflite de duplicidade 

required_once "include.php";
$resultado = somar(10,3);

echo $resultado;

?>