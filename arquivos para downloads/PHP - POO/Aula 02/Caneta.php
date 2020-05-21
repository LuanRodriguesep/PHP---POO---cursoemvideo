<?php 
class Caneta {
	var $modelo;
	var $cor;
	var $ponta;
	var $carga;
	var $tampada;

	function rabiscar () {
		if ($this->tampada == true) {
			echo "ERRO!!! Não posso rabiscar, a caneta está tampada";
		} else {
			echo "Estou Rabiscando ...";	
		}
		
		

	}
	function tampar (){
		$this->tampada = true;

	}
	function destampar(){
		$this->tampada = false;

	}
}
?>