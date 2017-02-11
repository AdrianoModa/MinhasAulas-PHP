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
	$a = 4.8;
	$b = "4.8";
	$r = $a == $b ? "SIM":"NÃO";
	echo "As variaveis A e B são iguais ? $r";
	echo "<br/>Variavel A: $a";
	echo "<br/>Variavel B: $b";
	echo "<br/>";
	
	$x = 5.1;
	$y = "5.1";
	$resp = $x === $y ? "SIM":"NÃO";
	echo "As variaveis X e Y são idênticas ? $resp";
	echo "<br/>Variavel A: $x";
	echo "<br/>Variavel B: $y";
 ?>
 </div>
</body>
</html>