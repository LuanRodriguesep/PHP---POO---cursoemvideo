<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 06 - Encapsulamento</title>
</head>
<body>
	<h1>Porjeto controle Remoto</h1>
	<pre>
	<?php  
		require_once 'ControleRemoto.php';
		$c = new ControleRemoto();
		$c->ligar();
		
		$c->play();
		$c->pause();
		$c->play();
		$c->abrirMenu();



		print_r($c);
		



	?>
</pre>
</body>
</html>