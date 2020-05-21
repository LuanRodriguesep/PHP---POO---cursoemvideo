<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Aula03 - POO </title>
</head>
<body>
	<pre>
	<?php 
		/*require_once 'Caneta.php';
		$c1 = new Caneta ;
		$c1->cor = "Azul";
		$c1->ponta = 0.5;
		#$c1->tampada = false ;
				
		$c1->tampar();
		#$c1->rabiscar();

		#var_dump($c1);
		print_r($c1);
		echo "</br>";

		$c2 = new Caneta;
		$c2->cor = "verde";
		$c2->carga = 50;
		$c2-> tampar();
		print_r($c2);*/

		require_once 'Caneta.php';
		$c1 = new Caneta ;
		$c1->modelo = "BIC Cristal";
		$c1->cor= "Azul";
		#$c1->ponta= 50;//Nao podemos alterar pois esta em modo privado 
		#$c1->carga= 99;
		#$c1->tampada= true; // nao podemos alterar pois esta em modo protegido
		

		$c1->tampar();// nao pode ser chamdo pois esta em modo privado
		$c1->rabiscar(); // Ele esta rabiscando mesmo o atributo sendo privado, pois o metodo de tampar e destampar é publico.

		print_r($c1);

	 ?>
	</pre>
	</p>
	

</body>
</html>