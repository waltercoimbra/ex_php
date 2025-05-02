<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 08</title>
</head>
<body>
    <main>
	<?php
	$num1 = $_GET['num1'] ?? 0;
	$peso1 = $_GET['peso1'] ?? 1;
	$num2 = $_GET['num2'] ?? 0;
	$peso2 = $_GET['peso2']?? 1;
	?>
	<h1>Médias Aritiméticas</h1>
	<form method="get" action="<?= $_SERVER['PHP_SELF']?>">
		<label for="num1">1º Valor</label>
		<input type="number" name="num1" id="num1" value="<?= $num1 ?>" required>
		<label for="peso1">1º Peso</label>
		<input type="number" name="peso1" id="peso1" min="1" value="<?=$peso1 ?>"required>
		<label for="num2">2º Valor</label>
		<input type="number" name="num2" id="num2" value="<?= $num2 ?>" required>
		<label for="peso2">2º Peso</label>
		<input type="number" name="peso2" id="peso2" min="1" value="<?= $peso2 ?>" required>
		<input type="submit" value="Calcular Média">
	</form>
    </main>
	
	<section id="resultado">
	<h1>Resultado final</h1>
	<?php
		$media = ($num1 + $num2) / 2;
		$mponderada = ($num1 * $peso1 + $num2 * $peso2)/($peso1 + $peso2);
		echo "<ul><li>A média aritimética é $media</li>";
		echo "<li>A média ponderada é $mponderada</li></ul>";
	?>
	</section>
        


</body>
</html>