<!DOCTYPE html>
<html>
<head>
	<title>Lista</title>
</head>
<body>
	<table>
		<tr>
			<td>  </td>
			<td><?="LISTAGEM DE CONTATOS "?></td>
		</tr>
		<tr></tr>
		<tr>
			<td>Nome</td>
			<td>Email</td>
			<td>Situacao</td>
			<td>Telefone</td>
		</tr>
		<?php foreach($novosItens as $row): ?>
		<tr>
			<td> <?php echo $row->nome; ?> </td>
			<td> <?php echo $row->email; ?> </td>
			<td> <?php echo $row->situacao; ?> </td>
			<td> <?php echo $row->telefone; ?> </td>
			<td><button id="visualizarContato"><a href="visualizarContato/<?= $row->id; ?>">Visualizar</a></button></td>
			<td><button id="editarContato"><a href="editarContato/<?= $row->id; ?>">Editar</a></button></td>
			<td><button id="excluirContato"><a href="excluirContato/<?= $row->id; ?>">Excluir</a></button></td>
		</tr>
		<?php endforeach; ?>
		<tr><td>Final Lista</td></tr>
	</table>
</body>
</html>