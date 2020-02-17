<html>
<head>
	<title> Minha página web - Formulário - Recuperando os Dados</title>
</head>
<body>
	<?php
		$idBanco = 10;
		$nomeUser = "admin";
		
		echo "<a href='exemplo08_dados.php?id=";
		echo $idBanco;
		echo "&user=";
		echo $nomeUser;
		echo "'>Passando dados via URL </a>";
	?>
</body>
</html>






