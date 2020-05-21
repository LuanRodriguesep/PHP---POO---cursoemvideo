<?php
require_once 'Lutador.php';
class Luta {
	//Atributos
	private $desafiado;
	private $desafiante;
	private $rounds;
	private $aprovada;


	//Metodos Publicos
	public function marcarLuta($l1, $l2) {
		if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
		
			$this->aprovada = true;
			$this->desafiado = $l1;
			$this->desafiante = $l2;
		}else{
			$this->aprovada = false;
			$this->desafiado = null;
			$this->desafiante = null; 
			echo "<p>Lutadores de status diferentes nao podem lutar !!! </p>";
		}
		
	}
	public function lutar() {
		if ($this->aprovada) {
			$this->desafiado->apresentar();
			$this->desafiante->apresentar();
			$vencedor = rand(0,2);
			switch ($vencedor) {
				case 0://emapate
					echo "<p> Empate !";
					$this->desafiado->empatarLuta();
					$this->desafiante->empatarLuta();
					break;
				case 1: //Desafiado vence
					echo "<p>" . $this->desafiado->getNome() . " Venceu a luta !!! </p>";
					$this->desafiado->ganharLuta();
					$this->desafiante->perderLuta();
					break;
				case 2: //Desafiante vence
					echo "<p>" . $this->desafiante->getNome() . " Venceu a luta !!!</p>";
					$this->desafiante->ganharLuta();
					$this->desafiado->perderLuta();
					break;
			}
		}
	}
	//Metodos Especiais
	function getDesafiado() {
		return $this->desafiado;
	}
	function getDesafiante() {
		return $this->desafiante;
	}
	function getRounds() {
		return $this->rounds;
	}
	function getAprovado() {
		return $this->aprovado;
	}
	function setDesafiado() {
		$this->desafiado = $desafiado;
	}
	function setDesafiante() {
		$this->desafiante = $desafiante;
	}
	function setRounds() {
		$this->rounds = $rounds;
	}
	function setAprovada() {
		$this->aprovada = $aprovada;
	}
} 
?>