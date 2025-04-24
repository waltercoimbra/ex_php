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
		$nome = isset($_GET['nome'])?$_GET['nome']:0;
        $nota1 = isset($_GET['nota1'])?$_GET['nota1']:0;
	    $nota2 = isset($_GET['nota2'])?$_GET['nota2']:0;
	   
	   $media = ($nota1 + $nota2) / 2;
	   echo "A média de $nome foi $media<br>";
	   if($media < 5){
		   echo "Aluno reprovado";
	   }elseif($media > 5 && $media < 7){
		   echo "Aluno de Recuperação";
	   }else{
		   echo "Aluno Aprovado, PARABÉNS";
	   }
    ?>
	<br>
	<a href="index.html">Voltar</a>
</div>
</body>
</html>
 