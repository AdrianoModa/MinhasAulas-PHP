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
	$x = "abc";
	$$x = "def";
	echo "O conteudo da variável X e $x";
	echo "<br/>A variável ABC criada recebeu valor $abc";
?>
 </div>
</body>
</html>