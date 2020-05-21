<?php
require_once 'Gafanhoto.php';
require_once 'Video.php';
class Visualizacao {
	private $espectador;
	private $filme;
	//metodos
	function avaliar() {
		$this->filme->setAvaliacao(5);
	}
	function avaliarNota($nota) {
		$this->filme->setAvaliacao($nota);
	}
	function avaliarPorcen($porcen) {
		$nova = 0;
		if ($porcen <= 20) {
			$nova = 3;
		}elseif ($nova <= 50) {
			$nova = 5;
		}elseif ($porc <= 90) {
			$nova = 8;
		}else{
			$nova = 10;
		}
		$this->filme->setAvaliacao($nova);
	}
	//metodos especiais
	public function __construct($espectador, $filme) {
		$this->espectador = $espectador;
		$this->filme = $filme;
		$this->filme->setViews($this->filme->getViews() + 1);
		$this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
	}

	function getEspectador() {
		return $this->espectador;
	}
	function getFilme() {
		return $this->filme;
	}
	function setEspectador($espectador) {
		$this->espectador = $espectador;
	}
	function setFilme($filme) {
		$this->filme = $filme;
	}
}