<?php

$con = new PDO("mysql:dbname=dbphp7;host=localhost", "root" ,"");

$stmt = $con -> prepare("SELECT * FROM tb_usuarios ORDER BY login");

$stmt -> execute();

$results = $stmt ->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {

	foreach ($row as $key => $value) {

		echo "<strong>".$key. "</strong>".$value."<br>";
		# code...
	}
	echo "=====================================================<br>";
}



?>