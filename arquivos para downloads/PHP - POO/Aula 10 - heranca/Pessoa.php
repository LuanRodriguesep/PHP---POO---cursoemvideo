<?php
class Pessoa {
	//Atributos
	private $nome;
	private $idade;
	private $sexo;
	//metodos
	public function perfil() {
		echo "<hr></hr>";
		echo "<p> " . $this->getNome() . " tem " . $this->getIdade() . " anos " . " é do sexo " . $this->getSexo() . "</p>";
	}
	public function fazerAniver() {
	#echo "-:-:-.Parabens.-:-:- <br>";		#echo "Hoje é seu Aniversário !!!";
	$this->setIdade($this->getIdade()+ 1);
	//$this->idade ++ ;
	}
	//metodos Especiais
	function __construct($no, $id, $se){
	$this->nome = $no;
	$this->idade = $id;
	$this->setSexo ($se);
	#$this->setIdade ($id);
	}
	 // Getters e Setters
	function getNome() {
		return $this->nome;
	}
	function getIdade() {
		return $this->idade;
	}
	function getSexo() {
		return $this->sexo;
	}
	function setNome($nome) {
		$this->nome = $nome;
	}
	function setIdade($idade){
		$this->idade = $idade;
	}
	function setSexo($sexo) {
		$this->sexo = $sexo;
		if ($this->sexo == "M") {
			$this->sexo = "masculino";
		}elseif ($this->sexo == "F") {
			$this->sexo = "feminino";
		}else{
			$this->sexo = "Inválido";
		}
	}
}