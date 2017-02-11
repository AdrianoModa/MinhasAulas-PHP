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
	$n1 = $_GET["a"];
	$n2 = $_GET["b"];
	$tipo = $_GET["op"];
	echo "Os valores passados foram $n1 e $n2<br/>";
	$r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
	echo "O resultado será $r";
 ?>
 </div>
</body>
</html>
