<?php
require_once 'Animal.php';
class Reptil extends Animal {
	private $corescama;
	//metodos sobrepostos
	function Locomover() {
		echo "<p>Rastejando ...</p>";
	}
	function Alimentar() {
		echo "<p>Frutas e vegetais e insetos</p> ";
	}
	function EmitirSom() {
		echo "<hr></hr>";
		echo "<p>Emitindo som ...</p>";
	}
	//metodos especial
	function getCorEscama () {
		return $this->corescama;
	}
	function setCorEscama($corescama) {
		$this->corescama = $corescama;
	}
}