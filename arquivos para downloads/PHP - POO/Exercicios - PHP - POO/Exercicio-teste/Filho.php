<?php
require_once 'Cuidador.php';
class Filho implements Cuidador{
	//atributos
	private $acordado;
	private $fome;
	//metodos especiais 
	function __construct(){
		$this->acordado = (false);
		$this->fome = (false);
		echo "<p>O Eduardo está dormindo ... quer acorda-lo ?</p> <br>";
	}
	private function getAcordado(){
		return $this->acordado;
	}
	private function getFome(){
		return $this->fome;
	}
	private function setAcordado($acor){
		$this->acordado = $acor;
	}
	private function setFome($fom){
		$this->fome = $fom;
	}

	//metodos
	public function acordar(){
		$this->setAcordado(true);
		echo "<p>Eduardo está começando a acordar...</p>";
	}
	public function dormir(){
		if ($this->getFome()==true) {
			echo "<br><p>Não tem como dormir chorando e com fome</p>";
		}else{
			echo "<br><p>Ele ja mamou, e está caindo de sono .... pronto dormiu !!!</p>";
		}
	}
	public function sorrindo(){
		$this->setFome(false);
		echo "<br><p>Eduardo está como a barriguinha cheia de leite ...</p>";
	}
	public function chorando(){
		$this->setFome(true);
		echo "<br><p>Eduardo está com fome ou com a frauda suja -_-</p>";
	}
}
?>