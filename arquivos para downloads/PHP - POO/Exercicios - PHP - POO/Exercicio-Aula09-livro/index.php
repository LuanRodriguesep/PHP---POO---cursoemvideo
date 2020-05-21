<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<pre>
	<?php
	require_once 'Pessoa.php';
	require_once 'Livro.php';
	$p=array(0,1,2,3);
	$p[0]= new Pessoa("Luan", 27, "M");
	$p[1]= new Pessoa("Karoline", 26, "F");
	$p[2]= new Pessoa("Eduardo", 1, "M");
	$p[3]= new Pessoa("Amora", 5, "F");
	
	$l[0]= new Livro ("PHP - POO" ,"Gustavo Guanabara" ,300, $p[0]);
	/*$p[0]->fazerAniver();
	$p[1]->fazerAniver();
	$p[2]->fazerAniver();
	$p[3]->fazerAniver();*/
	
	$p[0]->status();
	$p[1]->status();
	$p[2]->status();
	$p[3]->status();
	$l[0]->abrir();
	$l[0]->folhear(42);
	$l[0]->avancarPag();
	$l[0]->detalhes();

	







	?>
</pre>

</body>
</html>