<!DOCTYPE html>
<html>
<head>
	<title>Visualizar Contato </title>
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
		td{padding-right: 70px;}
	</style>
</head>
<body>
<div id="container">
<div id="body">
	<h1>Visualizar o contato <h1>
	<table> 
		<tr>
			<td>
				<form action="novoContato" method="POST">
					<?php foreach($itemSelect as $row): ?>
						<!--<input type="text" name="nome" id="nome" value="<?php echo $row->nome;?>"><br><br>-->
						<label>Id : </label><label><?php echo $row->id;?></label><br><br>
						<label>Nome : </label><label><?php echo $row->nome;?></label><br><br>
						<label>Situação : </label><label><?php echo $row->situacao;?></label><br><br>
						<label>Email : </label><label><?php echo $row->email;?></label><br><br>
						<label>Telefone : </label><label><?php echo $row->telefone;?></label><br><br>
					<?php endforeach; ?>
					<button><a href="<?=base_url('cartoesVisitas/buscarContato')?>">Voltar</a></button>
				</form>
			</td>
			<td>
				<form action='<?=base_url("cartoesVisitas/salvarUpdate/$row->id")?>' method="POST">
					<?php foreach($itemSelect as $row): ?>
						<label>Id : </label>
						<label><?php echo $row->id;?></label><br><br>

						<label>Nome : </label>
						<input type="text" name="nome" id="nome" value="<?php echo $row->nome;?>"><br><br>

						<label>Situação : </label>
						<select name="situacao" id="situacao">
							<option >Ativar</option>
							<option>Desativar</option>
						</select><br><br>

						<label>Email : </label>
						<input type="text" name="email" id="email" value="<?php echo $row->email;?>"><br><br>

						<label>Telefone : </label>
						<input type="text" name="telefone" id="telefone" value="<?php echo $row->telefone;?>"><br><br>
						
					<?php endforeach; ?>
					<input type="submit" name="btnSalvar" value="Salvar">
				</form>
			</td>
			
		</tr>
	</table>
</div>
</div>
</body>
</html>