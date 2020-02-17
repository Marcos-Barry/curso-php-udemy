<?php


require_once("session.php");

// esssa funcao gera novamente um id de sessao 
session_regenerate_id();

echo session_id();

?>