<?php 
    require_once("class\sql.php");

    $pdo = new Sql(); 
    $sql = $pdo->getConn(); 

    // pega parametro da URL
    if(isset($_GET['search']) && !empty($_GET['search'])) {
        
        $id = $_GET['search'];
  
    } else {
   
        echo "Você precisa informa ao menos 1 registro para deletar";
        
        die();
    }

    $stmt = $sql->prepare("DELETE FROM usuarios WHERE id = :id"); // construção select com where
   
    $stmt->bindValue(":id", $id);

    if( $stmt->execute() ) {
       
        echo "Registro deletado com sucesso!";
    
    } else {
    
        echo "Erro ao deletar o registro";
    
    }
