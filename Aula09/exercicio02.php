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
	if($i < 16){
		$tipoVoto = "não vota";
	}elseif($i >= 16 && $i < 18 || $i > 65){
			$tipoVoto = "voto opcional";
		}else{
			$tipoVoto = "voto obrigatório";
		}
	echo "<br/>Para esse idade, $tipoVoto";
?>
<div id="btnVoltar">
<a href="exercicio02.html">Voltar</a>
</div>
</div> 
</body>
</html>