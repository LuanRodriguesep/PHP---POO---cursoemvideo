<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa {
	private $login;
	private $totalssistido;
	//metodos 
	function AssistiumaisUm() {
		$this->setTotalAssistido($this->getTotalAssistido() + 1);
	}
	//metodos especiais 
	public function __construct ($nome, $idade, $sexo, $login){
		parent::__construct($nome, $idade, $sexo);
		$this->login = $login;
		$this->totalssistido = 0;
	}
	//getters
	function getLogin() {
		return $this->$login;
	}
	function getTotalAssistido() {
		return $this->totalssistido;
	}
	//setters
	function setLogin($login) {
		$this->login = $login;
	}
	function setTotalAssistido($totalssistido) {
		$this->totalssistido = $totalssistido;
	}
}