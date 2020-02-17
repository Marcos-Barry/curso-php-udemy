<?php 

class Usuario{

	private $idusuario;
	private $login;
	private $senha;
	private $dtcadastro;

	public function getIdusuario(){

		return $this->idusuario;
	}

	public function setIdusuario($value){
		$this->idusuario = $value;
	}

	public function getLogin(){

		return $this->login;
	}

	public function setLogin($value){
		$this->login = $value;
	}

	public function getSenha(){

		return $this->senha;
	}

	public function setSenha($value){
		$this->senha = $value;
	}

	public function getDtcadastro(){

		return $this->dtcadastro;
	}

	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}

	public function loadById($id){
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM TB_USUARIOS WHERE idusuario = :ID", array(
			"ID" => $id));

		if(count($results) > 0){

			$this->setData($results[0]);
		}
	}

	public static function getList(){

		$sql = new Sql();

		return $sql -> select("SELECT * FROM tb_usuarios ORDER BY login;");
	}

	public static function search($login){
		$sql = new Sql();

		return $sql -> select("SELECT * FROM tb_usuarios WHERE login like :SEARCH ORDER BY login ",array(':SEARCH'=>"%".$login."%"
		));
	}

	public function login($login, $password){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM TB_USUARIOS WHERE login = :LOGIN AND senha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password));

		if(count($results) > 0){

			$this->setData($results[0]);  

		} else{
			throw new Exception("Login e/ou Senhha inválidos"); 
		}

	}

	public function setData($data){

			$this->setIdusuario($data['idusuario']);
			$this->setLogin($data['login']);
			$this->setSenha($data['senha']);
			$this->setDtcadastro(new DateTime($data['dtcadastro']));
	}

	public function insert(){

		$sql = new Sql();
		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)",array(
		':LOGIN'=>$this->getLogin(),
		':PASSWORD'=>$this->getSenha()
		));

		if(count($results)>0){
			$this->setData($results[0]);
		}

	}

	public function update($login, $senha){

		$this->setLogin($login);
		$this->setSenha($senha);

		$sql = new Sql();
		$sql ->query("UPDATE  tb_usuarios set login = :LOGIN, senha = :SENHA WHERE idusuario = :ID",array(
			':LOGIN'=>$this->getLogin(),
			':SENHA'=>$this->getSenha(),
			':ID'=>$this->getIdusuario()
		));
	}

	public function delete(){
		$sql = new Sql();
		$sql->query("DELETE FROM tb_usuarios where idusuario =:ID",array(
			':ID'=>$this->getIdusuario()
		));

		$this->setIdusuario(0);
		$this->setLogin("");
		$this->setSenha("");
		$this->setDtcadastro(new DateTime());

	}

	public function __construct($login = "", $senha =""){

		$this->setLogin($login);
		$this->setSenha($senha);
	}

	public function __toString(){

		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"login"=>$this->getLogin(),
			"senha"=>$this->getSenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));
	}
}

?>