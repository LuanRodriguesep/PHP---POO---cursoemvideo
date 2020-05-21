<?php
class Ave extends Animal {
	private $corpena;
	//metodos sobrepostos
	function Locomover() {
		echo "<p> voando ... </p>";

	}
	function Alimentar() {
		echo "<p> Frutas e vegetais </p>";
	}
	function EmitirSom() {
		echo "<hr></hr>";
		echo "<p> Emitindo som </p>";
	}
	//metodos
	function FazerNinho() {
		echo "<p> Fazendo Ninho ... </p>";
	}
	//metodos especiais 
	function getCorPena() {
		return $this->corpena;
	}
	function setCorPena($corpena) {
		$this->corpena = $corpena;
	}
}