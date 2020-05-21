<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 05 - Conta Banco - POO</title>
</head>
<body>
	<pre>
	<?php
		require_once 'ContaBanco.php';
		
		$p1 = new ContaBanco();//Eduardo
		$p2 = new ContaBanco();//Karoline
		
		$p1->abrirConta("CC");
		$p1->setDono("Eduardo");
		$p1->setNumconta("28092019");
		$p1->depositar(300);
		$p1->pagarMensal();
		$p1->sacar("150");
		$p1->fecharConta();

		$p2->abrirConta("CP");
		$p2->setDono("Karoline");
		$p2->setNumconta("14041994");
		$p2->depositar("500");
		$p2->sacar("100");
		$p2->pagarMensal();
		$p2->sacar("530");
		$p2->fecharConta();

		print_r($p1);
		
		print_r($p2);


	?>
	</pre>
</body>
</html>