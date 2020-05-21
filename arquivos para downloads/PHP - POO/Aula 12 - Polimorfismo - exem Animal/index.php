<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Polimorfismo - Exemplo Class Animal </title>
</head>
<body>
<pre>
	<?php
		/*require_once 'Mamifero.php';
		require_once 'Reptil.php';
		require_once 'Ave.php';
		require_once 'Peixe.php';

		spl_autoload_register (function ($classNome){
  			require_once $classNome . '.php';
		});*/

		require_once 'autoload.php';
		
		$m = new Mamifero();
		$r = new Reptil();
		$a = new Ave();
		$p = new Peixe();

		$m->SetPeso(51);
		$m->SetIdade(18);
		$m->setMembros(4);
		$m->setCorPelo("Cinza");
		$m->Emitirsom();
		$m->Alimentar();
		$m->Locomover();
		print_r($m);

		$r->SetPeso(25);
		$r->SetIdade(33);
		$r->setMembros(4);
		$r->setCorEscama("Verde");
		$r->Emitirsom();
		$r->Alimentar();
		$r->Locomover();
		print_r($r);
		
		$a->SetPeso(5);
		$a->SetIdade(2);
		$a->setMembros(4);
		$a->setCorPena("Branca");
		$a->Emitirsom();
		$a->Alimentar();
		$a->Locomover();
		$a->FazerNinho();
		print_r($a);
		
		$p->SetPeso(17);
		$p->SetIdade(6);
		$p->setMembros(3);
		$p->setCorEscama("Amarelo");
		$p->Emitirsom();
		$p->Alimentar();
		$p->Locomover();
		$p->SoltarBolha();
		print_r($p);



	?>
</pre>
</body>
</html>