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
	/* Comentario 
	de varias linhas*/
	$atual = $_GET["aa"];
	echo "O ano atual e $atual"; # comentario de uma linha
	echo "<br/>O ano atual e $atual e o ano anterior e " . --$atual;
?>
 </div>
</body>
</html>