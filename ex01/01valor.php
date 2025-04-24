<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];
		
		$raiz = sqrt($valor);
		echo "<br>A raiz quadrada de $valor é ".number_format($raiz,2);
    ?>
	<br>
	<a href="02-index.html">Voltar</a>
</div>
</body>
</html>
 