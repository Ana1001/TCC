<body background="tec2.png"></body>
<fieldset>

<?php

require("form.php");
session_start();
if(!isset($_POST['u'])){
	echo "<div>Você não deve acessar esta página diretamente.</div>";
}else{
	if ($_POST['u'] == "ANAARAUJODOSREIS" and md5($_POST['s']) == '276b6c4692e78d4799c12ada515bc3e4') {
		$_SESSION['u'] = "ANAARAUJODOSREIS";
		$_SESSION['sucesso'] = 1;
		header("location: form.php");
	}else{
		$_SESSION['invalido'] = 1;
		header("location: form.php");
	}
}?>
</fieldset>