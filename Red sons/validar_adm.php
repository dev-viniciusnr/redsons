<?php
	
	require_once('conecta_almas.php');

	$usuario = $_POST['usuario_adm'];
	$email = $_POST['email_adm'];
	$senha = $_POST['senha_adm'];

	$sql= " SELECT * FROM admin WHERE usuario = '$usuario' AND email = '$email' AND senha = '$senha'  ";

	$objdb = new db();
	$link = $objdb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_adm = mysqli_fetch_array($resultado_id);
	
		if(isset($dados_adm['usuario'])){
			
			header('Location: adm_logado.php');

		}
		else{
			header('Location: almas.php?erro=1');
		}
}else{
	echo "Erro na execução da consulta,email não existe";
}

	

?>