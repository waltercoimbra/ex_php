<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 11</title>
</head>
<body>
    <main>
		<?php
		$preco = $_GET['preco'] ?? '0';
		$porc = $_GET['porc'] ?? '0';
		$formula = ($preco * $porc) / 100;

		?>
		<h1>Reajustador de Preços</h1>
		<form action="<?= $_SERVER['PHP_SELF']?>" method="get">
		<label for="preco">Preço do Produto</label>
		<input type="number" name="preco" id="preco" min="0.10" step="0.01" value=" <?= $preco?>">
		<label for="porc">Qual será o percentual de reajuste? (<strong><span = id="p">?</span>%</strong>)</label>
		<input type="range" name="porc" id="porc" min="0" max="100" step="1" value="<?= $porc ?>" oninput="mudaValor()">
		<input type="submit" value="Reajustar">
		
		</form>
    </main>
	
	<section id="resultado">
	<h1>Resultado do Reajusto</h1>
	<?php $npreco = $preco + $formula; ?>
	<p>O produto que custava R$ <?= number_format($preco,2,',','.'); ?>, com <?= $porc ?>% de aumento <br>vai passar a custar R$<?= number_format($npreco,2,',','.') ?> a partir de agora</p>
	</section>
        
	<script>
		mudaValor();
		function mudaValor(){
			p.innerText = porc.value;
		}
	
	</script>

</body>
</html>