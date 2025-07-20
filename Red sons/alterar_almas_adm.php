<?php
	
	require_once('conecta_almas.php');
	
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$old_senha = $_POST['old_senha'];

	$objdb = new db();
	$link = $objdb->conecta_mysql();

	$verifica = " SELECT * FROM almas WHERE email = '$email' AND senha = '$old_senha'  ";


	$sql = " UPDATE almas SET senha = '$senha' WHERE email = '$email' ";

	if(mysqli_query($link, $sql)){		
		header('Location: senha_alterada.php');
	}else{
		echo "erro ao alterar senha";
	}

?>