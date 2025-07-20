<?php
	
	$erro = isset($_GET['erro']) ? $_GET['erro']: 0;

?>
<!DOCTYPE html>
<html>
<head>

	<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	<title>Admin | RedSons</title>

	<script type="text/javascript">

		$(document).ready( function(){

			$('#btn_login').click(function(){

				var campo_vazio = false;

				if($('#usuario').val() == ''){
					$('#usuario').css({'border-color': 'red'});
					campo_vazio = true;
					alert ('Campo Usuario Vazio');
				}else{
					$('#usuario').css({'border-color': '#CCC'});
				}

				if($('#email').val() == ''){
					$('#email').css({'border-color': 'red'});
					campo_vazio = true;
					alert ('Campo Email Vazio');
				}else{
					$('#email').css({'border-color': '#CCC'});
				}

				if($('#senha').val() == ''){
					$('#senha').css({'border-color': 'red'});
					campo_vazio = true;
					alert ('Campo Senha Vazio');
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

	<h2>Logue como ADM</h2>
	
	<br><br><br>
	<div id="login">
		<form method="POST" action="validar_adm.php">
			<input type="text" placeholder="Usuario" name="usuario_adm" id="usuario">
			<input type="text" placeholder="E-MAIL" name="email_adm" id="email">
			<input type="password" placeholder="SENHA" name="senha_adm" id="senha">
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
	</div>
</div>
</body>
</html>