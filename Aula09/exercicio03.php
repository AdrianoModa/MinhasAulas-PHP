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
    $nt1 = isset($_GET["n1"]) ? $_GET["n1"]:"não informado";
    $nt2 = isset($_GET["n2"]) ? $_GET["n2"]:"nao informado";
    $m = ($nt1+$nt2)/2;

    if($m >=7 && $m <=10){
    	$situacao = "APROVADO";
    }elseif ($m >=4 && $m <7) {
    	$situacao = "RECUPERAÇÃO";
    }else{
    	$situacao = "REPROVADO";
    }
    echo "Situação do aluno: $situacao<br/>N1: $nt1 e N2: $nt2<br/>Sua media: $m";
 ?>
<div id="btnVoltar">
<a href="exercicio03.html">Voltar</a>
</div>
</div> 
</body>
</html>