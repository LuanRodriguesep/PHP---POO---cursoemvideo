<?php
class Peixe extends Animal {
	private $corescama;
	//metodos sobrepostos 
	function Locomover() {
		echo "<p> Nadando ... </p>";
	}
	function Alimentar() {
		echo "<p> Vegetais e outros peixes menores</p>";
	}
	function EmitirSom() {
		echo "<hr></hr>";
		echo "<p> Peixe nao emiti som </p>";
	}
	//metodos
	function soltarBolha() {
		echo "<p>Soltando bolhas</p>";
	}
	//metodos especiais 
	function getCorEscama() {
		return $this->corescama;
	}
	function setCorEscama($corescama){
		$this->corescama = $corescama;
	}
}
