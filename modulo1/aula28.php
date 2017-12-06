<?php
	//Aula 28 - Variáveis compostas
	header("Content-type: text/html; charset=utf-8");

	//Array 01
	$onibus = array(
		"marcaCarroceria" => [
			"Marcopolo" => [
				"Viaggio 1050",
				"Paradiso 1200",
				"Paradiso 1800"
				],
			"NeoBus",
			"Busscar",
		],
		"marcaChassi" => [
			"Scania",
			"Mercedes",
			"Volvo"
		],
	);



	//Array 01 - testes
	$onibus["marcaCarroceria"]["NeoBus"] = ["Mega Plus", "NewRoad"];

	echo "A marca é: ".$onibus["marcaCarroceria"][0];
		echo "</br>";
	echo "O modelo é: ".$onibus["marcaCarroceria"][0][2];
		echo "</br></br>";
	print_r($onibus["marcaCarroceria"]["Marcopolo"][2]);
		echo "</br></br>";
	print_r($onibus["marcaCarroceria"]["NeoBus"][0]);

	echo "<hr>";

	//Array 02 - testes
	$modeloOnibus = array(
		0 => array('Marcopolo' => "Viaggio", "Parasiso"),
		1 => array('NeoBus' => "Viaggio", "Parasiso"),
	);

	$modeloOnibus[] = array('Busscar' => "JumBuss 380", "JumBus 400");


	echo "<xmp>";
	print_r($modeloOnibus);
 ?>
