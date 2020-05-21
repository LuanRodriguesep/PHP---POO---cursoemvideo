<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>Classe - Eduardo</title>
</head>
<body>
	<pre>
	<?php
		require_once 'Filho.php';
		$e = new Filho();
		print_r($e);
		$e->acordar();
		$e->chorando();
		$e->dormir();
		$e->sorrindo();
		$e->dormir();

	?>
	</pre>
</body>
</html>