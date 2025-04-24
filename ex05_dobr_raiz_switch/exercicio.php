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
        $num = isset($_GET['num'])?$_GET['num']:0;
		$oper = isset($_GET['oper'])?$_GET['oper']:1;
		
		switch($oper){
			case "1":
				$dobro = $num * 2;
				echo "O dobro de $num é $dobro.";
				break;
			case "2":
				$cubo = $num * 3;
				echo "O cubo de $num é $cubo.";
				break;
			case "3":
				$raiz = sqrt($num);
				echo "A raiz quadrada de $num é ". number_format($raiz,2);//$n ^(1/2);
				break;
			default:
				echo "Erro, digite um número.";
		}
    ?>
	<br>
	<a href="index.html">Voltar</a>
</div>
</body>
</html>
 