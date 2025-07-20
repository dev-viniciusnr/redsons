<?php
	
	require_once('conecta_almas.php');
	
	$usuario = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];


	$objdb = new db();
	$link = $objdb->conecta_mysql();


	$email_existe = false;



	$sql = " select * from almas where email = '$email' ";
	if($resultado_id = mysqli_query($link, $sql)){

		$dados_email = mysqli_fetch_array($resultado_id);

		if(isset($dados_email['email'])){
			$email_existe = true;
		}
	}else{
		echo "Erro ao tentar localizar o registro de email";
	}

	if($email_existe){

		$retorno_get = '';

		if($email_existe){
			$retorno_get.= "erro_email=1&";
		}

		header('Location: add_usuarios.php?'.$retorno_get);
		die();
	}


	$sql = "insert into almas(usuario, email, senha) values ('$usuario', '$email', '$senha')";

	if(mysqli_query($link, $sql)){		
		header('Location: add_usuario_adicionado.php');
	}else{
		echo "erro ao cadastrar usuario";
	}

?>