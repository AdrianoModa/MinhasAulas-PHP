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
	$preco = $_GET["p"];
	$preco += ($preco*10/100);
	echo "O preço do produto e R$ " . number_format($preco,2,",",".");
	echo "<br/>E o novo preço com 10% de aumento sera R$ " .number_format($preco,2,",",".");
?>
 </div>
</body>
</html>