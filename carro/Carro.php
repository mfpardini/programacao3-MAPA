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
		echo $this->marca	. "</br>";
		echo $this->modelo	. "</br>";
		echo $this->cor		. "</br>";
		echo $this->ano		. "</br>";
		echo $this->cambio	. "</br>";

	}

	public function imprimeMotor() {
		echo $this->motor->cilindro		. "</br>";
		echo $this->motor->potencia		. "</br>";
		echo $this->motor->giroAtual	. "</br>";
		echo $this->motor->combustivel	. "</br>";

	}

}
?>