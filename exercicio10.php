<?php
	
	$nome= $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];

	$para = "gabriella@gmail.com";
	$assunto = "Envio de nformações";
	$mensagem = "Envio as informações solicitadas";

	if(mail($para, $assunto, $mensagem))
		echo  "Olá ".$nome, " suas informações são e-mail: " .$email, " /senha: " .$senha, "/ telefone: " .$telefone, "/ CPF: " .$cpf, "/ RG: " .$rg;
	else  
		echo "Erro ao enviar.";
	
?>

