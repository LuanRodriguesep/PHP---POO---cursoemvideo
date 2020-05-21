<?php
require_once 'Animal.php';
class Mamifero extends Animal {
	private $corpelo;
	//metodos especiais
	function Locomover() {
		echo "<p>Correndo ...</p>";
	}
	function Alimentar() {
		echo "<p>Mamando ...</p>";
	}
	function EmitirSom() {
		echo "<hr></hr>";
		echo "<p>Som de Mamifero ...$#@%#$@</p>";
	}
	function getCorPelo() {
		return $this->corpelo;
	}
	function setCorPelo($corpelo) {
		$this->corpelo = $corpelo;
	}
}