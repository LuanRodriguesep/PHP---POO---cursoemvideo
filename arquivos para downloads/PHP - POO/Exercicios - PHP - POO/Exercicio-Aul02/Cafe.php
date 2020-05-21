<?php  
class Cafe {
	var $colheracucar ;
	var $colhercafe ;
	var $agua ;
	var $fervura ;

	function filtrar (){
		if ($this->fervura == false){
			echo "ERRO !!! Não é possivel filtrar , a agua nao está  estado de ebulição ";
		} else {
			echo "Pode filtrar o café, a água ja esta fervendo";
		}
	}
	function fervendo (){
		$this->fervura = true ;
	}
	function morna (){
		$this->fervura = false;
	}
}	
?>