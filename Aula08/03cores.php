<!DOCTYPE html>
<html>
<head>
<?php 
	$txt = isset($_GET["t"]) ? $_GET["t"]:"Texto Generico";
	$tam = isset($_GET["tam"]) ? $_GET["tam"]:"12pt";
	$cor = isset($_GET["cor"]) ? $_GET["cor"]:"#000000";
 ?>	
 <style type="text/css">
 	span.texto {
 		font-size: <?php echo $tam; ?>;
 		color: <?php echo $cor; ?>;
 	}
</style>
<link rel="stylesheet" type="text/css" href="../estilo-consolephp.css">
<meta charset="utf-8">
	<title></title>
</head>
<body>
<p id="console">Executar_ </p>
<div id="meu-php">
<?php 
	echo "<span class='texto'>$txt</span></br>";
 ?>
<div id="btnVoltar">
<a href="03-exercicio.html">Voltar</a>
</div>
</div>
</body>
</html>