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
	$nome = isset($_GET["nome"]) ? $_GET["nome"]:"[não informado]";
	$ano = isset($_GET["ano"]) ? $_GET["ano"]:0;
	$sexo = isset($_GET["sexo"]) ? $_GET["sexo"]:"[sem sexo]";
	$idade = date("Y") - $ano;
	echo "$nome é $sexo e tem $idade anos.<br/>";
 ?>
<div id="btnVoltar">
<a href="02-exercicio.html">Voltar</a>
</div>
</div>
</body>
</html>