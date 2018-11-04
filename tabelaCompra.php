
<?php
$compras = listar_compras($conexao);
 if($compras) { ?>
	<table border=2 bgcolor="RoyalBlue" width=100% height=90%>
		<tr>
			<th>ID</th>
			<th>Nome do Consumidor</th>
			<th>Fornecedor</th>
			<th>Data da Reclamação</th>
			<th>CPF</th>
			<th>Endereco</th>
			<th>Tramitação</th>
			<th>Concluida</th>
			<th>Ações</th>
		</tr>
		<?php foreach ($compras as $c): ?>
			<tr>
				<td><?= $c['id']?></td>
				<td><?= $c['nome']?></td>
				<td><?= $c['fornecedor']?></td>
				<td><?= $c['reclamacao']?></td>
				<td><?= $c['cpf']?></td>
				<td><?= $c['endereco']?></td>
				<td><?= $c['tramitacao']?></td>
				<td><?= $c['concluida']?></td>
				<td><a href="excluir.php?id=<?= $c['id'] ?>"><font color=LightGray>Excluir</font></a> | <a href="atualizar.php?id=<?= $c['id'] ?>"><font color=LightGray>Atualizar</font></a></td>
			</tr>

		<?php endforeach ?>
	</table>
<?php } else{
	echo "Sem Registro de Compras.";
}
?>