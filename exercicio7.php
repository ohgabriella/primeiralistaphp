
<?php

	$valorBase= $_POST['base'];
	$valorAltura = $_POST['altura'];
	
	$resultado = ($valorBase * $valorAltura) / 2;
	
	echo "O valor da área do triângulo será: " .$resultado;
?>