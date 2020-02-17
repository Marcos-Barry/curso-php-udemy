<?php 

class Sql  {

	private $con;

	public function __construct(){

		$this->  con = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	}


	private function setParams($statement,$paramters = array()){

		foreach ($paramters as $key => $value) {
			
			$this->setParam($statement,$key,$value);
		}

	}

	private function setParam($statement, $key , $value){

		$statement -> bindParam($key,$value);

	}

	// rawQuery que significa query bruta 
	// params passando parametros atraves de array 
	public function query($rawQuery, $params = array()){

		$stmt = $this -> con -> prepare($rawQuery);

		$this -> setParams($stmt, $params);

		 $stmt->execute();

		 return $stmt;
		
		
	}

	public function select($rawQuery, $params = array()){

		$stmt = $this -> query($rawQuery, $params);

		return $stmt -> fetchAll(PDO::FETCH_ASSOC);
	}
}

?>