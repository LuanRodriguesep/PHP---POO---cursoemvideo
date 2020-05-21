<?php 
class Caneta {
	public $modelo;
	private $ponta;
	private $tampada;
	private $cor;


	public function __construct ($m, $c, $p){
		$this->modelo = $m;
		$this->cor = $c;
		$this->ponta = $p;
		$this->tampar();

	}



	/*public function __construct (){ // poderia trocar o comando construct pelo mesmo nome da classe --  function Caneta
		$this->cor = "verde";
		$this->tampar();
	}*/

	public function tampar(){
		$this->tampada = true;
	}

	public function getModelo(){
		return $this->modelo;
	}
	public function setModelo($m){
		$this->modelo = $m;
	}
	public function getPonta(){
		return $this->ponta;
	}
	public function setPonta($p){
		$this->ponta= $p;
	}
}
?>