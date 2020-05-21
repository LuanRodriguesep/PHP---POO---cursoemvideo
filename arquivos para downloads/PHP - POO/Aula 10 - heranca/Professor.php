<?php
require_once 'Pessoa.php';
class Professor extends Pessoa {
	//atributos
	private $especialidades;
	private $salario;
	//metodos
	public function receberAument($aum) {
		$this->setSalario($this->getSalario() + $aum);
	}
	//getters
	function getEspecialidades() {
		return $this->especialidades;
	}
	function getSalario() {
		return $this->salario;
	}
	//setters
	function setEspecialidades($espec) {
		$this->especialidades = $espec;
	}
	function setSalario($salario) {
		$this->salario = $salario;
	}
}