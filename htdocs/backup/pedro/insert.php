<?php 

require_once("class\sql.php");

$pdo = new Sql(); // instancia novo sql classe que conecta a base de dados com pdo
$sql = $pdo->getConn(); // pega o objeto pdo que está na classe

// valores  para inserir
$nome =  "user5";
$email = "user5@email";
$password = md5("teste");

// prepara o insert para poder ser executado
$stmt = $sql->prepare("INSERT INTO usuarios(nm_usuario, nm_email, senha) VALUES(:nm_usuario, :nm_email, :senha)"); // construção select com where

// passando os valores para o método pdo
$stmt->bindValue(":nm_usuario", $nome);
$stmt->bindValue(":nm_email", $email);
$stmt->bindValue(":senha", $password);

// executa a query junto com os valores passados no bindValue
$stmt->execute();

// verifica se a contagem de linhas na base foi maior que 0
if($stmt->rowCount() > 0 ) {
    echo "Cadastro efetuado com sucesso!";
} else {
    echo "Houveu um problema no cadastro!";
}