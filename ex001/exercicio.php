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
        $nome = isset($_GET['nome'])? $_GET['nome']:"nome não informado";
		echo "Tudo bem, $nome ? É um grande prazer te conhecer.";
    ?>
	<br>
	<a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 