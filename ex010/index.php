<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 08</title>
</head>
<body>
    <main>
	<?php
	$data = date("Y");
	$nasc = $_GET['nasc'] ?? 0;
	$ano = $_GET['idade'] ?? $data;

	?>
	<h1>Médias Aritiméticas</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" methodo="get">
	<label for="nasc">Em que ano você nasceur?</label>
	<input type="number" name="nasc" id="nasc" min="1900" max="<?php echo $data ?>" value="<?= $nasc?>" required>
	<label for="idade">Quer saber usa idade em que ano?(atualment estamos em <?= $data ?>)</label>
	<input type="number" name="idade" id="idade" value=<?= $data ?>>
	<input type="submit" value="Qual será minha idade?">
	
	</form>
    </main>
	
	<section id="resultado">
	<h1>Resultado</h1>
	<?php
		$idade = $ano - $nasc;
		echo "Quem nasceu em $nasc vai ter $idade anos em $ano";
 	?>
	</section>
        


</body>
</html>