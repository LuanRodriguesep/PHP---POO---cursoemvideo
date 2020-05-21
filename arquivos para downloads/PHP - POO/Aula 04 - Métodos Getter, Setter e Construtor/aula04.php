<!DOCTYPE html>
<html>
<head>
	<title>Aula04 - PHP - POO</title>
</head>
<body>
	<pre>
	<?php
		require_once 'Caneta.php';
		$c1 = new Caneta("Compact" , "Verde", "0.5");
		$c2 = new Caneta("Branco", "4 cores", "1.5");
			print_r($c1);
			print_r($c2);

		/*$c1->setModelo("BIC");
		$c1->setPonta(0.5); // Edicao via METODO, usando o comando >SET<

		#$c1->modelo = "Compact";
		#$c1->ponta(0.3); // nao pode ser alterada pois é uma propriedade privada, só podera ser alterada via METODO como acima .
		print "Eu tenho uma caneta {$c1->getModelo()} e ponta {$c1->getPonta()}";*/


	?>
	</pre>
</body>
</html>