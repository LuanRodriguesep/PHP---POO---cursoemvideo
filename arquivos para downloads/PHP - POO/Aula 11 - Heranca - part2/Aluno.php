<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
	//atributos
	private $matricula;
	private $curso;
	//metodos
	public function matricular() {
		$this->setMatricula(true);
	}
	public function cancelarMatri() {
		$this->setMatricula(false);
		echo "<p>A matricula do curso de ". $this->getCurso() . " será cancelada, sendo assim " . $this->getNome() . " será desligado do curso </p>";
	}
	public function pagarMensal() {
		echo "<p>Pagando Mensanlidade do aluno " . $this->getNome() .  "</p>";
	}
	//getters
	function getMatricula() {
		return $this->matricula;
	}
	function getCurso() {
		return $this->curso;
	}
	//setters
	function setMatricula($matri) {
		$this->matricula = $matri;
	}
	function setCurso($curso) {
		$this->curso = $curso;
	}
}

?>