<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<pre>
	<?php 

		
		require_once 'Autoload.php';


		$v = array(0,1,2,3) ;
		$v[0] = new Video("Curso POO PHP #14b - Projeto Final");
		$v[1] = new Video("Curso JavaScript");
		$v[2] = new Video("Curso Phyton");
		$v[3] = new Video("Curso de C#");
		
		$g = array(0,1,2,3);
		$g[0] = new Gafanhoto("Eduardo", 15, "M", "dudu@Edu");
		$g[1] = new Gafanhoto("Karoline", 26, "F", "karolzinhanas14");
		$g[2] = new Gafanhoto("Amora", 5, "F", "chatinha");
		$g[3] = new Gafanhoto("Luan", 27, "M", "LuanRodriguesep");

		$vis = array(0,1,2);
		//$vis[0] = new Visualizacao($g[0] ,$v[2]); // Eduardo assiste python
		//$vis[1] = new Visualizacao($g[0], $v[1]); // Amora assiste javascript
		$vis[3] = new Visualizacao($g[3], $v[3]); // Karoline assiste POO - PHP

		$v[3]->play();
		$v[3]->like();
		#$vis[3]->avaliarNota(8);
		$vis[3]->avaliarPorcen(55);
		print_r($vis[3]);




	





		
	?>
</pre>

</body>
</html>