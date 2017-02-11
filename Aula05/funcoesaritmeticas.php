<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../estilo-consolephp.css">
<style type="text/css">
	h2 {
		font: 12pt Arial;
		color: #171559;
	}
</style>
<meta charset="utf-8">
	<title></title>
</head>
<body>
<p id="console">Executar_ </p>
<div id="meu-php">
<?php 
	$v1 = $_GET["x"];
	$v2 = $_GET["y"];
	echo "<h2>Valores recebidos: $v1 e $v2</h2>";
	echo "O valor absoluto de $v2 e ". abs($v2);
	echo "<br/>O valor de $v1<sup>$v2</sup> e ". pow($v1,$v2);
	echo "<br/>A raiz de $v1 e ". sqrt($v1);
	echo "<br/>O valor arrendondado de $v2 e ". floor($v1);
	echo "<br/>A parte inteira de  de $v2 e ". intval($v2);
	echo "<br/>O valor de $v1 em moeda e R$ ". number_format($v1,2,",",".");
 ?>
</div>
</body>
</html>