<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 06</title>
</head>
<body>
    <main>
	<h1>Anatomia de uma Divisão</h1>
		<?php
			$dividendo = $_GET['d1'] ?? 0;//coalecencia
			$divisor = $_GET['d2'] ?? 1;
		?>
       
		<form method="get" action="<?= $_SERVER['PHP_SELF']?>">
		<label for="d1">Dividendo: </label>
		<input type="number" name="d1" id="d1" min="0" value="<?=$dividendo?>"><br>
		<label for="d2">Divisor: </label>
		<input type="number" name="d2" id="d2" min="1" value="<?=$divisor?>"><br>
		<input type="submit" value="Analisar">
		</form>
    </main>
	<section id="resultado">
		<h2>Estrutura da divisão</h2>
		<?php
			//Cálculos
			$quociente = intdiv($dividendo, $divisor);
			$resto = $dividendo % $divisor;
		?>
		<table class="divisao">
		<tr>
			<td><?=$dividendo?></td>
			<td><?=$divisor?></td>
		</tr>
		<tr>
			<td><?=$resto?></td>
			<td><?=$quociente?></td>
		</tr>
		</table>
	</section>
        


</body>
</html>