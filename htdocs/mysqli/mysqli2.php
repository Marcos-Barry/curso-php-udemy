<?php 

$con = new mysqli("localhost", "root", "", "dbphp7");

if($con -> connect_error ){

	echo "Error: ".$con->connect_error;
	exit;
}

$result = $con->query("SELECT * FROM tb_usuarios ORDER BY login");

$dados = array();


// enquanto olhar no banco e trazer resultados , armazena na variavel $row  
//MYSQLI_ASSOC ou  fetch_assoc traz os resultados sem os indices ou 

while($row = $result->fetch_array(MYSQLI_ASSOC)){ 

	array_push($dados, $row);

}

echo json_encode($dados);


?>