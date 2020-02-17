<?php

require_once("session.php");

echo session_save_path();
echo "<br>";

var_dump(session_status());

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "<br>";
		echo "Não existe nenhuma sessao.";
		echo "<br>";
		break;

	case PHP_SESSION_NONE:
		echo "<br>";
		echo "Não existe nenhuma sessao iniciada.";
		echo "<br>";
		break;

	case PHP_SESSION_ACTIVE:
		echo "<br>";
		echo "Voce esta online.";
		echo "<br>";
		break;		
	
	default:
		# code...
		break;
}

?>