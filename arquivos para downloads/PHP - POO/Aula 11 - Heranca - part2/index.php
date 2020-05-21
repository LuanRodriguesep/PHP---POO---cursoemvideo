<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<pre>
	<?php  
		require_once 'Visitante.php';
		require_once 'Aluno.php';
		require_once 'Bolsista.php';
		require_once 'Tecnico.php';
		require_once 'Professor.php';

		$v1 = new Visitante();
		$a1 = new Aluno();
		$b1 = new Bolsista();
		$t1 = new Tecnico();
		$p1 = new Professor();


		$v1->setNome("Amora");
		$v1->setIdade(10);
		$v1->setSexo("F");
		$v1->FazerAniver();
		

		$a1->setNome("Eduardo");
		$a1->setIdade(15);
		$a1->setSexo("M");
		$a1->Matricular();
		$a1->setCurso("POO - PHP");
		$a1->pagarMensal();
		
		$b1->SetNome("Karoline");
		$b1->SetIdade(26);
		$b1->setSexo("F");
		$b1->setBolsa(10);
		$b1->Matricular();
		$b1->setCurso("Gastronomia");
		$b1->pagarMensal();

		$t1->SetNome("Luan");
		$t1->SetIdade(27);
		$t1->setSexo("M");
		$t1->Praticar();
		$t1->setRegistroPro(2019);
		$t1->Matricular();
		$t1->setCurso("Análise e Densenvolvimento de Sistemas");


		$p1->setNome("Guanabara");
		$p1->setIdade(40);
		$p1->setSexo("M");
		$p1->setEspecialidade("Densenvolvimento de Sistema");
		$p1->setSalario(5500);
		$p1->receberAumento(150);
		$p1->FazerAniver();



		print_r($v1);
		print_r($a1);
		print_r($b1);
		print_r($t1);
		print_r($p1);


	?>
</pre>

</body>
</html>