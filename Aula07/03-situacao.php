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
	$nota1 = $_GET["n1"];
	$nota2 = $_GET["n2"];
	$m = ($nota1+$nota2)/2;

	# solução com ternário
	// $r = $m >=8 ? "APROVADO!":"REPROVADO!";

	echo "O situacao do Aluno: ". ($m >=8 ? "APROVADO!":"REPROVADO!");
	echo "<br/>A media do Aluno é: $m";
?>
</div>
</body>
</html>