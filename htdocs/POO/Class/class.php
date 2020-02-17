<?php 

class Pessoa{

	public $nome; // atributo


	public function falar(){ // metodo

		//$this variavel interna do php para fazer referencia a uma variavel que esta dentro de uma classe quando a msm for chamada por uma funçao dessa classe
		return " o meu nome é ".$this->nome;
	}
}

$marcos = new Pessoa();//criando um objeto pessoa
$marcos->nome = "Marcos Vinicius"; // instanciando Pessoa 
echo $marcos->falar();

?>