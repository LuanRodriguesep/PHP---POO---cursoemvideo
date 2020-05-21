<?php 
abstract class Animal {
	//atributos
	protected $peso;
	protected $idade;
	protected $membros;
	//metodos
	function Locomover() {

	}
	function Alimentar() {

	}
	function EmitirSom() {

	}
	//metodos especiais
	//getters
	function getPeso() {
		return $this->peso;
	}
	function getIdade() {
		return $this->idade;
	}
	function getMembros() {
		return $this->membros;
	}
	//setters
	function setPeso($peso) {
		$this->peso = $peso;
	}
	function setIdade($idade) {
		$this->idade = $idade;
	}
	function setMembros($membros) {
		$this->membros = $membros;
	}
}