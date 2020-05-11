<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
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
	</style>
</head>
<body>
	<div id="container">
		<div id="body">
			<?="<h1>Cadastrar Novo Contato<h1>"?>
			<form action="novoContato" method="POST">
				<label>Nome : </label>
				<input type="text" name="nome" id="nome"><br><br>

				<label>Telefone : </label>
				<input type="text" name="telefone" id="telefone"><br><br>

				<label>Email : </label>
				<input type="text" name="email" id="email"><br><br>

				<input type="submit" name="salvar" value="Salvar">
			</form>
		</div>
	</div>
</body>
</html>