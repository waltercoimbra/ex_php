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
        $ano = isset($_GET['ano'])?$_GET['ano']:0;
		$idade = date('Y') - $ano;
		echo "Você naseceu em $ano e tem $idade anos.";
		if($idade < 16){
			$v = "Voto nao permitido";
		}else if($idade >= 18 && $idade < 65){
			$v = "Voto é obrigatório";
		}else{
			$v = "Voto é opcional";
		}
		echo "<br>Com essa idade o $v";
    ?>
	<br>
	<a href="index.html">Voltar</a>
</div>
</body>
</html>
 