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
	$m = ($n1+$n2)/2;
	echo "A soma vale ". ($n1+$n2);
	echo "<br/>A subtração vale ". ($n1-$n2);
	echo "<br/>A multiplicação vale ". ($n1*$n2);
	echo "<br/>A divisão vale ". ($n1/$n2);
	echo "<br/>O modulo resta ". ($n1%$n2);
	echo "<br/>A media vale ". $m;
 ?>
 </div>
</body>
</html>