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
	$num = $_GET['num'] ?? 1;
	?>
	<h1>Informe um número</h1>
	<form method="get" action="<?= $_SERVER['PHP_SELF']?>">
		<label for="num">Número</label>
		<input type="number" name="num" id="num" value="<?= $num ?>" required>
		<input type="submit" value="Calcular Raizes">
	</form>
    </main>
	<section id="resultado">
	<h1>Resultado final</h1>
	<?php
		$rq = sqrt($num); // $rq = $num ** (1/2);
		$rc = $num ** (1/3);
		echo "Analisando o número ,temos:";
		echo "<ul>";
		echo "<li>A sua raiz quadrada é ".number_format($rq,3,',','.')." </li>";
		echo "<li> A sua raiz cúbica é ".number_format($rc,3,',','.')."</li>";
		echo "</ul>";
	?>
	</section>
        


</body>
</html>