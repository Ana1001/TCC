<?php 
if(isset($_POST['nome'])){
	require "func.php";
	gravar_compra($conexao, $_POST);
	header("Location: index.php"); //redireciona para index.php
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar novo Processo</title>
</head>
<body background="azul.png">

	<font color=LightCyan><fieldset style = "width: 50%;  margin: 0px auto;"><h1>Cadastrar novo Processo</h1></font>
	 <form action="cadastrar.php" method="post">

	 <font color=LightCyan> 
	 <fieldset>
	 <legend><b>Dados do Processo:</b>
	 </legend>
	 </font>
		<label>
			Nome do Consumidor:
			<input type="text" name="nome" style = "width: 50%;  margin: 0px auto;".>
		</label>
		<p><label>
			Fornecedor:
			<input type="text" name="fornecedor">
			<!-- <textarea name="Codigo"></textarea> -->
		</label>
	<p>
		
		<p><label>
			Data da Reclamação:
			<input type="text" name="reclamação">
		</label>
		<label>
			CPF:
			<input type="text" name="cpf">
		</label>
		<p><label>
			Endereço:
			<input type="text" name="endereco">
		</label>
		
		<p><label>
		
	  		Tramitação:
			<input type="text" name="tramitacao">
			
		</label>
		</fieldset>
		<fieldset>
		<legend><b>Concluida</b></legend>
			<input type="radio" name="concluida" value="sim">Sim<br>
			<input type="radio" name="concluida" value="nao">Não<br> 
		</fieldset>
		<input type="submit" name="Enviar">
	</form>
</fieldset>
</body>
</html>
