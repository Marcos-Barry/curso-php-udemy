<?php 


/**
 * 
 */
class Endereco 
{
	
	private $rua;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c) // nao precisa ter o mesmo nome das variaveis 
		{
		$this->rua = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}
}

$meuEndereco = new Endereco("Valter Sorio", "886", "Guaruja");
var_dump($meuEndereco);

?>