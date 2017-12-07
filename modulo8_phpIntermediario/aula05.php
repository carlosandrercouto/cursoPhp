<?php
	//Aula 05 - Funções de Data e Tempo #1
	header("Content-type: text/html; charset=utf-8");

	$dataAtual = date("l, d/F/Y - H:i:s");
	$dataAtual2 = date("l, d/F/Y \à\s H:i:s");
	$dataAtual3 = date("l, d/F/Y "."às"." H:i:s");

	echo $dataAtual;
	echo "<hr>";
	echo $dataAtual2;
	echo "<hr>";
	echo $dataAtual3;
 ?>
