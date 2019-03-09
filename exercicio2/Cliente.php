<?php

require_once("Pessoa.php");

class Cliente extends Pessoa {

	public $preferencia;

	public function __construct($codigo = "", $nome = "", $dataNascimento = "", $preferencia = "") {
		
		parent::__construct($codigo, $nome, $dataNascimento);
		$this->preferencia = $preferencia;
	}
	
	public function getPreferencia() {
	    return $this->preferencia;
	}
	 
	public function setPreferencia($preferencia) {
	    $this->preferencia = $preferencia;
	}

	public function imprimir() {
		$dados = array(
			"codigo" => $this->getCodigo(),
			"nome" => $this->getNome(),
			"dataNascimento" => $this->getDataNascimento(),
			"preferencia" => $this->getPreferencia()
		);
		return $dados;
	}

}


?>