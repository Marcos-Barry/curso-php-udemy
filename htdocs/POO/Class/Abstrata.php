<?php 

interface Veiculo{

	public function acelerar($velocidade){

	}

	public function frenar(){

	}

	public function trocarMarcha(){

	}
}

 abstract class Automovel  implements Veiculo{

	public function acelerar($velocidade){

		echo "O Veiculo acelerou ate ". $velocidade . " km/h";
	}

	public function frenar($velocidade){

		echo "O velocidade frenou apos atingir ". $velocidade . " km/h";

	}

	public function trocarMarcha($marcha){

		echo "O Veiculo engatou a marcha ".$marcha;
	}

}

class Celta extends Automovel{

	public function trocarPneu(){

	}

}

$celtinha = new Celta();

$celtinha->acelerar(190));

?>