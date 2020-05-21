<?php
require_once 'Lobo.php';
class Cachorro extends Lobo {
	//metodos sobrepostos
	function EmitirSom() {
		echo "<hr></hr>";
		echo "<p>Au ! Au ! Au ! ...</p>";
	}
	function reagirFrase($fra) {
		if ($fra == "Toma comida" || $fra == "Olá") {
			echo "<p> Abanar e latir </p>";
		}else{
			echo "<p> Rosnar </p>";
		}
	}
	function reagirHora($h, $min) {
		if ($h<12) {
			echo "<p> Abanar </p>";
		}elseif ($h>=18 ) {
			echo "<p> Ignorar </p>";
		}else {
			echo "<p> Abanar e Latir </p>";
		}
	}
	function reagirDono($dono) {
		if ($dono == true) { // if ($dono) -- >> poderia ser escrito so chamando a variavel
			echo "<p> Brincar </p>";
		}else{
			echo "<p> Morder </p>";
		}
	}
	function reagirIdadePeso($id, $pes) {
		if ($id < 4) {
			if ($pes < 10 ) {
				echo "<p> Abanar </p>";
			}else{
				echo "<p> Latir </p>";
			}
		}else{
			if ($pes < 10) {
				echo "<p> Rosnar </p>";
			}else{
				echo "<p> /ignorar </p>";
			}
		}
	}
}