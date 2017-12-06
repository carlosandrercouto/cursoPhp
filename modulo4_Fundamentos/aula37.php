<?php
	//Aula 36 - Anti-F5
	header("Content-type: text/html; charset=utf-8");

	if (isset($_POST['nome'])) {

		$name = $_POST['nome'];
		file_put_contents("aula36Arquivos/text.txt", $name, FILE_APPEND);

		header("location: aula37.php");
	}
 ?>
<form method="post">
	<input type="text" name="nome" autocomplete="off" placeholder="Nome"><br/>
	<button type="submit" name="">Enviar</button>
</form>
