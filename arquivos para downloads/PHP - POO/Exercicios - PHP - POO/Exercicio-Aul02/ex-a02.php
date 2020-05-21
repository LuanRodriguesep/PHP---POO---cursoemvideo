<!DOCTYPE html>
<html>
<head>
	<title>Exercicio - Aula02-POO</title>
</head>
<body>
	<?php  
		require_once 'Cafe.php';
		$c1 = new Cafe ;
		$c1->colheracucar= 4;
		$c1->colhercafe= 8;
		$c1->agua = "1 Lt";
		$c1->marca = "3 Corações";
		$c1->preco = "R$ 8,99";
		//$c1->fervura = false ;

		

		$c1->fervendo();
		#$c1->morna();
		$c1->filtrar();
		
		echo "</br>";

		print_r($c1);

		echo "</br>";

		$c2 = new Cafe;
		$c2->marca = "Pilão";
		$c2->agua= "1 Lt";
		$c2->preco= "R$ 10,00";
		$c2->colhercafe = 3;
		$c2->colheracucar = 6; 

		print_r($c2);

		
	?>

</body>
</html>


