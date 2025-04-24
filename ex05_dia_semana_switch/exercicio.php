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
		$dia = isset($_GET['dia'])? $_GET['dia']: 0;
		switch ($dia){
			case 2:
			case 3:
			case 4:
			case 5:
			case 6:
				echo "Levanta e vai trabalhar";
				break;
			case 7:
			case 8:
				echo "Vamos descansar e pare de beber.";
				break;
			default:
				echo "Dia da semana inválido.";
		}
    ?>
	<br>
	<a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 