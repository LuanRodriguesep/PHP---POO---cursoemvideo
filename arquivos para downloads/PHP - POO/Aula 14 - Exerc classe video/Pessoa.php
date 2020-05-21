<?php
abstract class Pessoa {
	//Atributos
	protected $nome;
	protected $idade;
	protected $sexo;
	protected $experiencia;
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
	function GanharExp($exp) {
		$this->setExperiencia($this->getExperiencia() + $exp );
	}
	//metodos Especiais
	function __construct($no, $id, $se){
	$this->nome = $no;
	$this->idade = $id;
	$this->setSexo ($se);
	$this->experiencia = 0;
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
	function getExperiencia(){
		return $this->experiencia;
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
	function setExperiencia($exp) {
		$this->experiencia = $exp;
	}
}