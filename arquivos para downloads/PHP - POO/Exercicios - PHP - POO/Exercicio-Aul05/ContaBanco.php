<?php
class ContaBanco {
	public $numconta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	//Metodos
	
	function abrirConta($tip){
		$this->setTipo($tip);
		$this->setStatus(true);
		if ($tip == "CC"){
			$this->setSaldo(50);
		} elseif ($tip == "CP"){
			$this->setSaldo(150);
		}
	}
	function fecharConta(){
		if ($this->getSaldo() > 0){
			echo "<p>Conta ainda tem dinheiro, não posso fecha-la!";
		}	elseif ($this->getSaldo() < 0) {
			echo "<p> A conta esta em debito, imossivel encerrar</p>";
		}else {
			$this->setStatus(false);
			echo "<p> Conta de ".$this->getDono()." encerrada com sucesso </p>";
		}

	}
	public function depositar($v){
		if ($this->getStatus()){
			$this->setSaldo($this->getSaldo() + $v);
			echo "<p> Depositado valor de R$:$v na conta de " . $this->getDono() . "</p>";
	}else {
		echo "<p>Conta fechada.Não consigo depositar.</p>";
	}

	}
	public function sacar ($v){
		if ($this->getStatus ()){
			if ($this->getSaldo () >= $v) {
				//$this->saldo = $saldo - $v;		
				$this->setSaldo($this->getSaldo()-$v);
				echo "<p> Saque de R$:$v autorizado na conta de ". $this->getDono()."</p>";
			}else{
				echo "<p>Saldo insufuciente para saque.</p>";
			}

		}else{
			echo "<p>Não posso sacar de uma conta fechada</p>";
		}	
					
	}
	function pagarMensal(){
		if($this->getTipo() == "CC"){
			$v= 12;
		} elseif ($this->getTipo() == "CP"){
			$v = 20;
		}
		if ($this->getStatus()){
			$this->setSaldo($this->getSaldo() - $v);
			echo "<p> Mensalidade de R$:$v debitada da conta de " . $this->getDono() . "</p>";
		}else{
			echo "<p> Problemas com a conta, Não posso cobrar</p>";
		}

	}


	// Metodos Especiais


	public function __construct (){ 
		$this->saldo= (0) ;
		$this->status= (false);
		echo "<p> Conta criada com Sucesso </p>";
	}

	public function getNumConta (){
		return $this->numconta;
	}

	public function setNumConta ($num){
		$this->numconta = $num ;
	}

	public function getTipo (){
		return $this->tipo;
	}
	public function setTipo($tip){
		$this->tipo = $tip;
	}
	public function getDono(){
		return $this->dono;
	}
	public function setDono($don){
		$this->dono = $don;
	}
	public function getSaldo(){
		return $this->saldo;
	}
	public function setSaldo($sal){
		$this->saldo= $sal;
	}
	public function getStatus (){
		return $this->status;
	}
	public function setStatus ($sit){
		$this->status=$sit;
	}


}


	?>