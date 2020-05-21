<?php
abstract class Pessoa {
	//atributos
	protected $nome;
	protected $idade;
	protected $sexo;
	//metodos
	public final function fazerAniver() {
		$this->idade ++ ;
	}
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
	function setIdade ($idade) {
		$this->idade = $idade;
	}
	function setSexo ($sexo) {
		$this->sexo = $sexo;
		if ($this->sexo == "M") {
			$this->sexo = "Masculino";
		}elseif ($this->sexo == "F") {
			$this->sexo = "Feminino";
		}else{
			$this->sexo = "Inválido";
		}
	}
}