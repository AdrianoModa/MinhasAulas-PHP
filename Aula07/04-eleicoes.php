<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../estilo-consolephp.css">
<meta charset="utf-8">
	<title></title>
</head>
<body>
<p id="console">Executar_ </p>
<div id="meu-php">
<?php 
	$ano = $_GET["an"];
	$idade = 2017 - $ano;
	echo "Quem nasceu em $ano tem idade de $idade anos.";
	$tipo = ($idade >=18 and $idade <65) ? "OBRIGATORIO":"NÃO OBRIGATORIO";
	echo "<br/>E dessa forma seu voto e $tipo";
 ?>
</div>
</body>
</html>
