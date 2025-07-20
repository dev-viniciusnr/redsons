<?php
	
	require_once('conecta_almas.php');
	
	$email = $_POST['email'];

	$objdb = new db();
	$link = $objdb->conecta_mysql();

	$sql = " DELETE FROM almas WHERE email = '$email' ";

	if(mysqli_query($link, $sql)){		
		header('Location: remove_usuarios.php');
	}else{
		echo "erro ao remover usuário";
	}

?>