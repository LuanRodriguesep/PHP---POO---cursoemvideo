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
		require_once 'Aluno.php';
		require_once 'Professor.php';
		require_once 'Funcionario.php';
		
		$p1= new Pessoa ("Luan" ,27, "M");
		$p2=new Aluno("Eduardo", 1, "M");
		$p3=new Professor("Karoline", 26, "F");
		$p4=new Funcionario("Amora", 30, "F");

		$p4->setSetor("Canil");
		$p4->setTrabalhando("Está de quarentena");
		$p4->mudarTrabalho("PetShop");
		
		$p3->setEspecialidades("Culinária");
		$p3->setSalario(5000);
		$p3->receberAument(100);

		#$p2->setMatricula();
		$p2->setCurso("Programação Orientada Objeto");
		$p2->cancelarmatri();
		$p2->getCurso();


		print_r($p2);
		print_r($p3);
		print_r($p4);

		

	?>
</pre>	

</body>
</html>