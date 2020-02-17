<?php 
    require_once("class\sql.php");
    $pdo = new Sql();
    $sql = $pdo->getConn();

    /*
        SELECT EXEMPLE
    */
    if(isset($_GET['search']) && !empty($_GET['search'])) {
    
        $search = $_GET['search']; // pega valor que vem na url
        $stmt = $sql->prepare("SELECT * FROM usuarios WHERE id = :id"); // construção select com where
        $stmt->bindParam(":id", $search); // passa o parametro para o método pdo solicitado no prepare com where
    
    } else {
        
        $stmt = $sql->prepare("SELECT * FROM usuarios");
    }

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($results as $key => $value) {
       
       echo "id: " . $value['id'] . "<br>";
       echo "Nome: " . $value['nm_usuario'] . "<br>";
       echo "E-mail: " . $value['nm_email'] . "<br>";
       echo "Criado: " . $value['created_at'] . "<br>"; // sempre tratar formato de data e hora no servidor
       echo "<br><br><hr>";
    }

?>

 
