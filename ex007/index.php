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
	<h1>Informe seu salário</h1>
		<?php
			$salario = $_GET['sal']?? 1518;
			$min = $_GET['min']?? 1518;
		?>
       
		<form method="get" action="<?= $_SERVER['PHP_SELF']?>">
		<label for="min">Valor do salário mínimo</label>
		<input type="number" name="min" id="min" step="0.01" required>
		<label for="d1">Salário(R$): </label>
		<input type="number" name="sal" id="sal" min="0" value="<?= $salario ?>" step="0.01">
		<p>Considerando o salário mínimo de R$<?= $min ?></p>
		<input type="submit" value="Calcular">
		</form>
    </main>
	<section id="resultado">
		<h2>Resultado Final</h2>
		<?php
		$tot = intdiv($salario,$min);
		$dif = $salario % $min;
		echo "<p> Quem recebe um salário de R$".number_format($salario,2,",",".")." ganha $tot mínimos + R$".number_format($dif,2,",",".");
			
		?>
		
	</section>
        


</body>
</html>