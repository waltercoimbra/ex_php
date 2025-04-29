<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<body>
	<main>
		<h1>PHP PROCESSADO</h1>
	<pre>
	<?php 
		setcookie("dia-da-semana","TERÇA",time()+ 3600);
		session_start();
		$_SESSION['teste'] = "FUNCIONOU";
		echo "<h1>Superglobal GET</h1>";
		var_dump($_GET);
		echo "<h1>Superglobal POST</h1>";
		var_dump($_POST);
		echo "<h1>Super Global REQUEST</h1>";
		var_dump($_REQUEST);
		echo "<h1>Super Global COOKIE</h1>";
		var_dump($_COOKIE);
		echo "<h1>Super Global SESSION</h1>";
		var_dump($_SESSION);
	?>
	
	</pre>
	</main>
	
	
</body>
</html>