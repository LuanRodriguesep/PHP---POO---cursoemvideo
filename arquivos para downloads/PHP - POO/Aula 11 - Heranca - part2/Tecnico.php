<?php
class Tecnico extends Aluno {
	//atributos
	private $registroProfissional;
	//metodos
	function praticar() {
		echo "<p> O tecnico " . $this->getNome() . ", está praticando suas habilidades tecnicas </p> ";
	}
	//metodos especiais
	function getRegistroPro() {
		return $this->registroProfissional;
	}
	function setRegistroPro($registroPro) {
		$this->registroProfissional = $registroPro;
	}

}