<?php
	require('func.php');
	if(isset($_POST['nome'])){
		atualizar_compra($conexao, $_POST);
		header("Location: index.php");
	}
	$c = buscar_compra($conexao, $_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Atualizar </title>
</head>
<body background="azul.png">
<font color=LightCyan><fieldset style = "width: 50%;  margin: 0px auto;"><h1>Atualizar Informação</h1></font>

	<form action="atualizar.php" method="post">
		<input type="hidden" name="id" value="<?= $c['id']?>">
		<label>
			Nome do Consumidor:
			<input type="text" name="nome" value="<?= $c['nome']?>">
		</label>
		<p><label>
			Fornecedor:
		<input type="text" name="fornecedor" value="<?= $c['ornecedor']?>">
		</label>
		<p><label>
			Data da Reclamação:
			<input type="text" name="reclamacao" value="<?= $c['reclamacao']?>">
		</label>
		<p><label>
			CPF:
			<input type="text" name="cpf" value="<?= $c['cpf']?>">
		</label>
		<p><label>
			Endereço:
			<input type="text" name="endereco" value="<?= $c['endereco']?>">

		</label>
		<p><label>
			Tramitação:
			<input type="text" name="ttramitacao" value="<?= $c['tramitacao']?>">

			</label>
		<p><label>
			<br>Concluida:<br>
			<input type="radio" name="concluida" value="sim">Sim<br>
			<input type="radio" name="concluida" value="nao">Não<br>
		</label>
		<input type="submit" name="Enviar">
	</form>

</body>
</html>