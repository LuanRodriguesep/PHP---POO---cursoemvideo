<?php 
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
	//atributos 
	private $volume;
	private $ligado;
	private $tocando;
	//metodos especiais 
	function __construct() {
		$this->volume = 50;
		$this->ligado = false;
		$this->tocando = false;
	}
	private function getVolume() {
		return $this->volume;
	}
	private function getLigado() {
		return $this->ligado;
	}
	private function getTocando() {
		return $this->tocando;
	}
	private function setVolume($volume) {
		$this->volume = $volume;
	}
	private function setLigado($ligado) {
		$this->ligado = $ligado;
	}
	private function setTocando($tocando) {
		$this->tocando = $tocando;
	}
		//Metodos
	public function ligar() {
		$this->setLigado(true);
		
	}
	public function desligar() {
		$this->setLigado(false);
	}
	public function abrirMenu(){
		echo "<p>-__-.::MENU::.-__-</p>";
		echo "<br> Está ligado ? : "; 
		if ($this->getLigado() == true){
			echo "SIM";
		}
		else{
			echo "NAO";
		}
		echo "<br> Está tocando ? :" .($this->getTocando()?"SIM":"NAO");
		echo "<br>Volume : ". $this->getVolume();
		for ($i=0; $i <= $this->getVolume(); $i+=10) {
			echo ".:|.:.|";
		}
		echo "<br>";
	}
	public function fecharMenu() {
		echo "<br> Fechando menu ... ";
	}
	public function maisVolume() {
		if ($this-> getLigado ()) {
			$this-> setVolume($this->getVolume() + 5);
		}
	}
	public function menosVolume() {
		if ($this->getLigado()) {
			$this->setVolume($this->getVolume() - 5);
		}
	}
	public function ligarMudo() {
		if ($this->getLigado() && $this->getVolume()>0) {
			$this->setVolume(0);
		}
	}
	public function desligarMudo(){
		if ($this->getligado() && $this->getVolume()==0){
			$this->setVolume($this->getVolume() + 5);
		}

	}
	public function play() {
		if ($this->getLigado() == true ){
			$this->setTocando(true);
		}
	
	}
	public function pause() {
		if($this->getligado() && $this->getTocando())
			$this->setTocando(false);
	}
}

?>
