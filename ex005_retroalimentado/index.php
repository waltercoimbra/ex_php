<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Escrevento no mesmo arquivo</title>
</head>
<body>
    <main>
	<h1>Somador de Valores</h1>
		<?php
			$valor1 = $_GET['v1'] ?? 0;//coalecencia
			$valor2 = $_GET['v2'] ?? 0;
		?>
       
		<form method="get" action="<?= $_SERVER['PHP_SELF']?>">
		<label for="v1">Valor 1: </label>
		<input type="number" name="v1" id="v1" value="<?=$valor1?>"><br>
		<label for="v2">Valor 2: </label>
		<input type="number" name="v2" id="v2" value="<?=$valor2?>"><br>
		<input type="submit" value="Somar">
		</form>
    </main>
	<section id="resultado">
		<h2>Resultado da soma</h2>
		<?php
			$soma = $valor1 + $valor2;
			print("<p>A soma entre os valores $valor1 e $valor2 é: $soma");
		?>
	</section>
        


</body>
</html>