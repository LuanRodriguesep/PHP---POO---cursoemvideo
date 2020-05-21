<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sobrepor & SobreCarga</title>
</head>
<body>
<pre>
	<?php  
		/*require_once 'Lobo.php';
		require_once 'Cachorro.php';*/

		spl_autoload_register (function ($class){
  		require_once $class . '.php';
		});

		$l = new Lobo();
		$c = new Cachorro();

		$l->EmitirSom();
		#print_r($l);

		$c->EmitirSom();
		$c->reagirFrase("Toma comida");
		$c->reagirHora(11,50);
		$c->reagirDono(false);
		$c->reagirIdadePeso(2, 12.5);
		$c->reagirIdadePeso(17, 4.5);
		
		$c->setMembros(4);
		print_r($c);
	?>
</pre>
</body>
</html>