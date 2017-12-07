<?php
	//Aula 05 - Funções matemaricas
	header("Content-type: text/html; charset=utf-8");

	echo abs(-4.55); //Valor exato
	echo "<hr>".round(2.4); //Arredonda  para cima ou para baixo considerando 0,5
	echo "<hr>".ceil(2.4); //Arredonda para cima
	echo "<hr>".floor(2.8); //Arredonda para baixo
	echo "<hr>".rand(3, 9); //Arredonda um numero aleatorio entre os valores informados

	$nomes = array("Carlos", "Andre", "Vinicios", "William");
	$sort = rand(0, 4);
	echo "<hr> User sorteado ".$nomes[$sort];


 ?>
