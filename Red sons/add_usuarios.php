<?php
	
	$erro = isset($_GET['erro']) ? $_GET['erro']: 0;

	$erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;

?>
<!DOCTYPE html>
<html>
<head>

	<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	<title>Almas | RedSons</title>

</head>
<body>
<div id="interface">
	<div id="cadastro">
		<form method="POST" action="registra_almas_pelo_adm.php">
			<input type="text" placeholder="NOME" name="nome" id="nome">
			<input type="text" placeholder="E-MAIL" name="email" id="email">
			<input type="password" placeholder="SENHA" name="senha" id="senha">
			<input type="submit" value="Adicionar Alma">
		</form>
	</div>

	<?php
				if($erro_email){
					echo "<font color='red'>E-mail já existe</font>";
				}

			?>

</div>
</body>
</html>