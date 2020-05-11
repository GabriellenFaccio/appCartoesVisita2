<!DOCTYPE html>
<html>
<head>
	<title>Lista</title>
	<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
			background-image: url("https://i.pinimg.com/originals/57/bb/66/57bb66cb4895565d755910654a6b0c80.jpg");
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		hr{
			color: pink;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			border-radius: 15px;
			box-shadow: 0 0 8px #D0D0D0;
			background-color: white;
		}

		button{
			border: 1px solid #D0D0D0;
			border-radius: 15px;
			padding: 4px;
			padding-left: 13px;
			padding-right: 13px;
			background-color: pink;
			color: black;
		}
		table{
			border-color: gray;
		}

		td{padding-right: 70px;}
	</style>
</head>
<body>
	<div id="container">
	<div id="body">
		<form action="pesquisarContato" method="POST">
			<br>
			<h3>PESQUISA DE CONTATOS</h3>
			<br>

			<label>Pesquisar : </label>
			<input type="text" name="pesquisar" id="pesquisar">

			<input type="submit" name="pesquisarContato" id="pesquisarContato" value="Buscar">

			<br><br>
			<hr>
		</form>
		<h3 style="margin-left: 35%;">LISTAGEM DE CONTATOS</h3>
		<table>
			<tr></tr>
			<tr>
				<td><h3>Nome</h3></td>
				<td><h3>Email</h3></td>
				<td><h3>Situacao</h3></td>
				<td><h3>Telefone</h3></td>
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
	</div>
	</div>
</body>
</html>