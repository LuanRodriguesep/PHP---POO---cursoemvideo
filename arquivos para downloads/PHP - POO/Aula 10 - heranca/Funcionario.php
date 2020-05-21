<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa {
	//atributos
	private $setor;
	private $trabalhando;
	//metodos
	public function mudarTrabalho($mud) {
		$this->setSetor($mud);
		//$this->trabalhando = ! $this->trabalhando; -- sera do tipo logico verdadeiro ou falso
	}
	//getters
	function getSetor() {
		return $this->setor;
	}
	function getTrabalhando() {
		return $this->trabalhando;
	}
	//setters
	function setSetor($setor){
		$this->setor = $setor;
	}
	function setTrabalhando($trabalhando) {
		$this->trabalhando = $trabalhando;
	}
}