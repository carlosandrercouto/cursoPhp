<?php
	//Aula 02 - Foreach
	header("Content-type: text/html; charset=utf-8");

	$nomes = array("Carlos", "Andre", "Vinicios", "William");

	foreach ($nomes as $aluno) {
		echo "Aluno: ".$aluno."<br/>";
	};

	$usersList = array(
		array(
			'nome' => "Carlos",
			"idade" => "22",
			"profissao" => "Front-End Plenin"
		),
		array(
			'nome' => "William",
			"idade" => "26",
			"profissao" => "PHP Senior Foda"
		),
		array(
			'nome' => "Vinicios",
			"idade" => "27",
			"profissao" => "Av. Tapajós Senior"
		)
	);

	//Exemplo 01
	foreach ($usersList as $users) {
		echo "
			<p>Nome: ".$users["nome"]."<p>
			<p>Idade: ".$users["idade"]."<p>
			<p>Profissao: ".$users["profissao"]."<p><hr>"
		;
	};

	foreach ($usersList as $nArray => $value) {
		echo "<p>".$nArray." =".$value["nome"]." = ".$value["idade"]." ".$value["profissao"]."<p>";
	}
?>
