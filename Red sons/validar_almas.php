<?php
	
	require_once('conecta_almas.php');

	$email = $_POST['txtemaillogin'];
	$senha = $_POST['txtsenhalogin'];

	$sql= " SELECT * FROM almas WHERE email = '$email' AND senha = '$senha'  ";

	$objdb = new db();
	$link = $objdb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_almas = mysqli_fetch_array($resultado_id);
	
		if(isset($dados_almas['email'])){
			
			header('Location: alma_logada.php');

		}
		else{
			header('Location: almas.php?erro=1');
		}
}else{
	echo "Erro na execução da consulta,email não existe";
}

	

?>