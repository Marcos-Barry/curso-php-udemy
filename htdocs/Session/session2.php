<?php

session_start();

//apaga variavel de sessao
session_unset($_SESSION["nome"]);
echo($_SESSION["nome"]);

//session_destroyer limpa a variave e remove do servidor 
session_destroy();
?>