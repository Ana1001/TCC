
<?php 
require ("func.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Controle de Processos</title>
</head>

<font color=LightCyan><body background="tec2.png"  >

<fieldset style = "width: 80%;  margin: 0px auto;">
<legend ><b><h1>Gerenciamentos dos Processos</h1></b></legend>
	
<?php
//link sair fixo
echo "Usuario: ANA ARAUJO DOS REIS " ?>
<a href="sair.php"><font color=LightGray>Sair</font></a>
	<ul>
	<fieldset style = "width: 30%;  margin: 0px auto;">
	  <legend><b>Menu:</b></legend>
		<li><a href="cadastrar.php"><font color=LightGray>Cadastrar Processo</font></a></li>
		</fieldset>
	</ul>
	<h2>Processos Cadastrados</h2>
	<font color=Black><?php include "tabelaCompra.php"; ?>

</fieldset>
</body>
</html>