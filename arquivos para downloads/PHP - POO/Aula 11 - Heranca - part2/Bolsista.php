<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
	//atributos
	private $bolsa;
	//metodos
	public function renovarBolsa() {
		echo "<p>Bolsa Renovada</p>";
	}
	public function pagarMensal() {
		echo "<p> " . $this->getNome() . " é bolsista, por isso paga com desconto </p>";
	}

	//Metodos Especiaias
	function getBolsa() {
		return $this->bolsa;
	}
	function setBolsa($bolsa) {
		$this->bolsa = $bolsa;
	}

}