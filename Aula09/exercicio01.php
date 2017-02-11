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
	$a = isset($_GET["ano"]) ? $_GET["ano"]:1900;
	$i = date("Y") - $a;
	echo "Você nasceu em ano $a e hoje tem $i anos.";
	if($i >= 18){
		$v = "já pode votar";
		$d = "já pode dirigir";
	}else{
		$v = "não pode votar";
		$d = "não pode dirigir";
	}
	echo "<br/>Com essa idade você $v e também $d";
?>
<div id="btnVoltar">
<a href="exercicio01.html">Voltar</a>
</div>
</div> 
</body>
</html>