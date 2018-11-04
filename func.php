<?php
require "conn.php";

function listar_compras($conexao){
 	$sqlBusca = 'SELECT * FROM compras';
 	$resultado = mysqli_query($conexao, $sqlBusca);
 	
  	$compras = [];

 	while ($compra = mysqli_fetch_assoc($resultado)) {
  		$compras[] = $compra;
  	}
  	return $compras;
  }

function gravar_compra($conexao, $c){
	if(!isset($c['concluida'])) $c['concluida'] = 0;
	$sqlGravar = "INSERT INTO compras 
					( nome, fornecedor,reclamacao,cpf, endereco,tramitacao,concluida,acao)
				VALUES (
				'$c[nome]', 
				'$c[fornecedor]', 
				'$c[reclamacao]', 
				'$c[cpf]', 
				'$c[endereco]',
				'$c[tramitacao]',
				'$c[concluida]',
				'$c[acao]')";

	mysqli_query($conexao, $sqlGravar) 
		or die(mysqli_error($conexao));
}

function excluir_compra($conexao, $id){
	$sqlExcluir = "	DELETE FROM compras
					WHERE id = '$id'";

	mysqli_query($conexao, $sqlExcluir) 
		or die(mysqli_error($conexao));
} 

function buscar_compra($conexao, $id){
	$sqlBusca = "SELECT * FROM compras WHERE id = '$id'";
	$resultado = mysqli_query($conexao, $sqlBusca);
 	
 	$compras = mysqli_fetch_assoc($resultado);
 	
 	return $compras;
}

function atualizar_compra($conexao, $c){
	$sqlAtualizar = "UPDATE compras SET
						nome = '$c[nome]',
						fornecedor = '$c[fornecedor]',
						reclamacao = '$c[reclamacao]',
						cpf = '$c[cpf]',
						endereco = '$c[endereco]',
						tramitacao = '$c[tramitacao]',
						concluida = '$c[concluida]',
						acao = '$c[acao]'
					WHERE id = '$c[id]'";
	mysqli_query($conexao, $sqlAtualizar) or die(mysqli_error($conexao));
}
