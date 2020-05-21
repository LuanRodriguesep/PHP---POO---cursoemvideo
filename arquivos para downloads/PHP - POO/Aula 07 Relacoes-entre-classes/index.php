<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> UEC - Lutadores de Classes </title>
</head>
<body>
<pre>
	<?php  
		require_once 'Lutador.php';
		require_once 'Luta.php';
		$l=array(0, 1, 2, 3, 4, 5);
		$l[0] = new Lutador("Eduardo", "Brasil", 30, 1.75, 95, 99, 0, 1);
		$l[1] = new Lutador("Luan", "USA", 27, 1.79, 80, 100, 0, 0);
		$l[2] = new Lutador("Karoline" ,"Inglaterra", 26, 1.55, 75, 98, 0, 2 );
		$l[3] = new Lutador("Amora", "França", 35, 1.80, 69.5, 50, 10, 5);
		$l[4] = new Lutador("Popó", "Japão", 25, 1.90, 100, 78, 8, 10);
		$l[5] = new Lutador("Milk", "Italia", 21, 1.92, 65, 30, 5, 3);

			$UEC01 = new Luta();
			$UEC01->marcarLuta($l[3], $l[5]);
			$UEC01->lutar();
			$l[3]->status();
			$l[5]->status();
			

?>
</pre>

</body>
</html>