<?php

require_once("Pessoa.php");

class Colaborador extends Pessoa {

	public $setor;
	private $dataAdmissao;
	protected $salario;

	public function __construct($codigo = "", $nome = "", $dataNascimento = "",
								$setor = "", $dataAdmissao = "", $salario = "") {
		
		parent::__construct($codigo, $nome, $dataNascimento);
		$this->setor = $setor;
		$this->dataAdmissao = $dataAdmissao;
		$this->salario = $salario;
	}

	public function setSetor($setor) {
	    $this->setor = $setor;
	}

	public function setDataAdmissao($dataAdmissao) {
	    $this->dataAdmissao = $dataAdmissao;
	}

	public function setSalario($salario) {
	    $this->salario = $salario;
	}

	public function getSetor() {
	    return $this->setor;
	}

	public function getDataAdmissao() {
	    return $this->dataAdmissao;
	}

	public function getSalario() {
	    return $this->salario;
	}

	public function imprimir() {
		$dados = array(
			"codigo" => $this->getCodigo(),
			"nome" => $this->getNome(),
			"dataNascimento" => $this->getDataNascimento(),
			"setor" => $this->getSetor(),
			"dataAdmissao" => $this->getDataAdmissao(),
			"salario" => $this->getSalario()
		);
		return $dados;
	}


}


?>