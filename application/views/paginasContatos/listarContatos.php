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
		<?php foreach($dadosBanco as $row): ?>
		<tr>
			<td> <?php print_r($row->nome); ?> </td>
			<td> <?php print_r($row->email); ?> </td>
			<td> <?php print_r($row->situacao); ?> </td>
			<td> <?php print_r($row->telefone); ?> </td>
		</tr>
		<?php endforeach; ?>
		<tr><td>Final Lista</td></tr>
	</table>
</body>
</html>