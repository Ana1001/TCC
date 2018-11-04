
<!DOCTYPE html>
<html>
<head>
	<font color=LightCyan><title>Login</title>
</head>
<body background="azul.png">
<fieldset style = "width: 90%;  margin: 120px auto;">
	<?php
	//usuario invalido
	session_start();
	 if(isset($_SESSION['invalido'])){
		echo "<div>Usuário ou senha inválidos!</div>";
		unset($_SESSION['invalido']);
		}
	//usuario correto
		if(isset($_SESSION['sucesso'])){
			echo "<div>Login realizado com sucesso!</div>";
			unset($_SESSION['sucesso']);
			require "index.php";
		}
		?>
		<!-- testa se o usuario esta logado-->
	<?php if(!isset($_SESSION['u'])){?>
		<h1>Login</h1>
		<form action="login.php" method="post">
			<input type="text" name="u" placeholder="Nome de usuario" required="1">
			<input type="password" name="s" placeholder="senha" required="1">
			<input type="submit" value="Entrar" class="btn btn-primary">
		</form>
		<!-- validação do usuario -->
	<?php }else{
	 echo "Usuario: ".$_SESSION['u']." ";
	echo "<a href='sair.php'>Sair</a>";
		}?>
</fieldset>
</body>
</html>