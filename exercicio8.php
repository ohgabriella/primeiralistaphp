<?php

	$anoNasc= $_POST['anoNasc'];
	$anoAtual = $_POST['anoAtual'];
	
	$resultado = $anoAtual- $anoNasc;
	
	echo $resultado, " anos é a sua idade";
	
?>

