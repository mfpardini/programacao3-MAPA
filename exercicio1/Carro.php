<?php

require_once("Motor.php");

class Carro {

	public $motor;
	public $modelo;
	public $cor;
	public $marca;
	public $ano;
	public $cambio;

	public function __construct() {
		$this->motor = new Motor();
	}

	public function imprimeCarro() {
		$dados = array(
			"marca" => $this->marca,
			"modelo" => $this->modelo,
			"cor" => $this->cor,
			"ano" => $this->ano,
			"cambio" => $this->cambio
		);
		return $dados;
	}

	public function imprimeMotor() {
		$dados = array(
			"cilindro" => $this->motor->cilindro,
			"potencia" => $this->motor->potencia,
			"giroAtual" => $this->motor->giroAtual,
			"combustivel" => $this->motor->combustivel
		);
		return $dados;
	}

}
?>