<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<h1>PHP PROCESSADO</h1>
	</header>
	<section>
	<?php  
		$num1 = 1;
		$num2 = 10;
		echo "<p>Gerando um número entre $num1 e $num2...</p>";
		$n = mt_rand($num1, $num2);
		echo "<p>Número gerado <strong>$n</strong>";
	?>
	<p><button onclick="javascript:document.location.reload()">&#X1F504;Gerar outro</button></p>
	</section>
	
	
</body>
</html>