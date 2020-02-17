<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM TB_USUARIOS ORDER BY login");

////print_r($usuarios);

// arquivo CSV eh um arquivo formatado utilizado para exportar ou importar 

$headers = array();

// usando esse foreach esta passando para o array headers o resultado do select separados por colunas
foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(" , ", $headers)."\r\n");
// utilizando o implode vc separa os itens do headers como vc preferir 

foreach ($usuarios as $row) {
	
	$data = array();

// foreach significa para cada, cada linha do banco de dados vai rodar 
	foreach ($row as $key => $value) {
		
		array_push($data, $value);
	}// fim do foreach da coluna

	fwrite($file, implode(" , ", $data)."\r\n");
} // fim do foreach da linha 

fclose($file);

?>