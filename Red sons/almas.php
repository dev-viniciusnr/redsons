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

	<script type="text/javascript">

		$(document).ready( function(){

			$('#btn_login').click(function(){

				var campo_vazio = false;

				if($('#email').val() == ''){
					$('#email').css({'border-color': 'red'});
					campo_vazio = true;
				}else{
					$('#email').css({'border-color': '#CCC'});
				}

				if($('#senha').val() == ''){
					$('#senha').css({'border-color': 'red'});
					campo_vazio = true;
				}else{
					$('#senha').css({'border-color': '#CCC'});
				}

				if(campo_vazio) return false;

			});
		
		});

	</script>

</head>
<body>
<div id="interface">
	<div id="logo">
		<img src="logo.png">
	</div>
	<div id="cadastro">
		<form method="POST" action="registra_almas.php">
			<input type="text" placeholder="NOME" name="nome" >
			<input type="text" placeholder="E-MAIL" name="email" >
			<input type="password" placeholder="SENHA" name="senha">
			<input type="submit" value="DOAR">
		</form>
	</div>

	<?php
				if($erro_email){
					echo "<font color='red'>E-mail já existe</font>";
				}

			?>

	<br><br><br>
	<div id="login">
		<form method="POST" action="validar_almas.php">
			<input type="text" placeholder="E-MAIL" name="txtemaillogin" id="email">
			<input type="password" placeholder="SENHA" name="txtsenhalogin" id="senha">
			<button type="submit" id="btn_login">Login
			</button>
		</form>
		<?php
			if($erro == 1){
				echo "<br>";
				echo "<font color='#FF0000'>Usuário ou senha invalidos</font>";
			}


		?>
	</div>
	<div id="almas">
		<h2>XX Almas ja foram doadas!</h2>
	</div>
</div>
</body>
</html>