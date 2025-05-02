<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 12</title>
</head>
<body>
    <main>
		<?php
		$total = $_GET['total'] ?? '0';

		?>
		<h1>Calculadora de Tempo</h1>
		<form action="<?= $_SERVER['PHP_SELF']?>" method="get">
		
		<label for="totsegundo">Qual o total de segundos?</label>
		<input type="number" name="total" id="total" placeholder="Digite a quantidade de segundos" value=" <?= $total ?>">
		
		<input type="submit" value="Calcular">
		
		</form>
    </main>
	
	<section id="resultado">
	<h1>Totalizando tudo</h1>
	<p>Analisando o valor que você digitou, <?= number_format($total,0,",",".") ?> segundos
	equivalem a um total de:</p>
	<?php
	 $sobra = $total;
	 
	 $semana = (int)($sobra / 604_800);
	 $sobra = $sobra % 604_800;
	 $dia = (int)($sobra / 86_400);
	 $sobra = $sobra % 86_400;
	 $hora = (int)($sobra / 3_600);
	 $sobra = $sobra % 3_600;
	 $minuto = (int)($sobra / 60);
	 $sobra = $sobra % 60;
	 $segundo = $sobra; ?>
	<ul>
		<li><?= $semana ?> semanas</li>
		<li><?= $dia ?> dias</li>
		<li><?= $hora ?>horas</li>
		<li><?= $minuto ?> minutos</li>
		<li><?= $segundo ?> segundos</li>
	</ul>
	</section>
     

</body>
</html>