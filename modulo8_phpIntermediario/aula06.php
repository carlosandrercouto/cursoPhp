<?php
	//Aula 06 - Funções de Data e Tempo 2
	header("Content-type: text/html; charset=utf-8");

	$x = time();
	//echo $x;

	echo "<tr>";

	$dataProxima = date('d/m/y', strtotime("+2 days", 0));
	echo $dataProxima;
?>
