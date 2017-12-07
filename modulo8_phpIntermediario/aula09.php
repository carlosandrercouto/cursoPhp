<?php
	//Aula 09 - Manipulação de Arrays
	header("Content-type: text/html; charset=utf-8");

	$mydata = array(
		"nome" => "Carlos André Couto",
		"idade" => "90",
		"cidade" => "Virgolândia",
		"pais" => "Brasil"
	);

	$arrayKeys = array_keys($mydata); //Exibe indices do array
	$arrayValues = array_values($mydata); //Exibe values do array
	//$arrayPop = array_pop($mydata); //Remove, ultimo item do array
	//$arrayPop = array_shift($mydata); //Primeiro, primeiro item do array
	$arrayAsort = asort($mydata); //Reorganiza array em ordem alfabetica, mantendi os indices
	$arrayAsort = sort($mydata); //Reorganiza array em ordem alfabetica, reorganizando os indices
	//$arrayAsort = arsort($mydata); //Reorganiza array em ordem alfabetica decrescente

	echo "<xmp>";
	print_r($arrayKeys);
	print_r($mydata);
	print_r($arrayValues);

	//echo "O total de registros é:".count($mydata);

	//*****************

	$arrayVence = array(
		"Carlos",
		"Joao",
		"Pedro",
		"Matias"
	);

	if (in_array("Carlos", $arrayVence)) {
		echo "O vencedor foi Carlos";
	}
 ?>
