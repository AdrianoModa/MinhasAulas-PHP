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
	$valor = $_GET["v"];
	$rq = sqrt($valor);
	echo "A Raiz de $valor e igual a " . number_format($rq,2) ."<br/>";
?>
<div id="btnVoltar">
<a href="01-exercicio.php">Voltar</a>
</div>
</div> 
</body>
</html>