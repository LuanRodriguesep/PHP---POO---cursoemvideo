<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
	//atributos
	private $titulo;
	private $autor;
	private $totPaginas;
	private $pagAtual;
	private $aberto;
	private $leitor;
	
	//metodos publicos 
	function detalhes() {
		echo "<p> Livro " . $this->titulo . " escrito por " . $this->autor;
		echo "<br><p> Total de paginas : " . $this->totPaginas . " o leitor " .$this->leitor->getNome() . " ja leu ate a pagina " . $this->pagAtual .  "</p> ";
	}
	function __construct ($tit, $aut, $tot, $lei) {

		$this->titulo = $tit;
		$this->autor = $aut;
		$this->totPaginas = $tot;
		$this->leitor = $lei;
		$this->aberto = false;
		$this->pagAtual = 0;
	}
	//Getters e Setters
	//getters
	function getTitulo() {
		return $this->titulo;
	}
	function getAutor() {
		return $this->autor;
	}
	function getTotPaginas(){
		return $this->totPaginas;
	}
	function getPagAtual() {
		return $this->pagatual;
	}
	function getAberto(){
		return $this->aberto;
	}
	function getLeitor(){
		return $this->leitor;
	}
	//setters
	function setTitulo() {
		$this->titulo = $titulo;
	}
	function setAutor() {
		$this->autor = $autor;
	}
	function setTotPaginas() {
		$this->totpaginas = $totpaginas;
	}
	function setPagAtual() {
		$this->pagatual = $pagatual;
	}
	function setAberto() {
		$this->aberto = $aberto;
	}
	function setLeitor() {
		$this->leitor = $leitor;
	}
	//metodos abstratos
	public function abrir() {
		$this->abrir = true;
	}
	function fechar() {
		$this->abrir = false;
	}
	function folhear($pg) {
		if ($pg > $this->totPaginas) {
			$this->pagAtual = 0;
		}else{
			$this->pagAtual = $pg;
		}
	}
	function avancarPag() {
		$this->pagAtual ++;
	}
	function voltarPag() {
		$this->pagAtual --;
	}
}