<?php
	echo "LISTAGEM DE CONTATOS <br><br>";

	foreach ($query as $row){
		echo $row->nome."<br>";
	}


?>