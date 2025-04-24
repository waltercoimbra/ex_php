<!DOCTYPE html>
<html>
<head>
 <?php
        $txt = isset($_GET['t'])? $_GET['t']:"Texto genérioco";
		$tam = isset($_GET['tam'])? $_GET['tam']:"12px";
		$cor = isset($_GET['cor'])? $_GET['cor']:"#000000";
		echo "<span class='texto'>$txt</span>";
    ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
		span.texto {
			font-size:<?php echo $tam; ?>;
			color:<?php echo $cor;?>;
		}
  </style>
</head>
<body>
<div>
    <?php
        
		echo "<span class='texto'>$txt</span>";
    ?>
	<br>
	<a href="index.html">Voltar</a>
</div>
</body>
</html>
 