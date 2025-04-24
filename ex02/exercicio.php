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
        $nome = isset($_GET['nome'])? $_GET['nome']:"[não informado]";
		$ano = isset($_GET['ano'])? $_GET['ano']:0;
		$sexo = isset($_GET["sexo"])? $_GET['sexo']:"[Sexo não informado]";
		$idade = date("Y") - $ano;
		echo "$nome é $sexo e tem $idade anos.";
    ?>
	<br>
	<a href="index.html">Voltar</a>
</div>
</body>
</html>
 