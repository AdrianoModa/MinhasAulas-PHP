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
	$a = 3;
	$b = &$a;
	$b += 5;
	echo "A variavel A vale $a";
	echo "<br/> A variavel B vale $b";
?>
 </div>
</body>
</html>