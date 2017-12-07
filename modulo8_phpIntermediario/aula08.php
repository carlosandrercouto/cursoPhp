<?php
	//Aula 08 - Manipulacao de strings
	header("Content-type: text/html; charset=utf-8");

	//explode
	$explodeString = "Carlos André Couto";
	$x = explode(" ", $explodeString);
	echo "<xmp>";
	print_r($x);

	//implode
	$implodeString = array("Carlos", "André", "Couto");
	$x2 = implode(" ", $implodeString);
	print_r($x2);
	echo "</xmp>";

	//number_format
	$number = number_format(18.5876544714, 3);
	print_r($number."</br>");

	//str_replace
	$input = "<input type='text' value='Car And Cou' value=''>";
	$nDadosForm = str_replace("Car", "Carlos", $input);
	echo $nDadosForm."</br>";

	//strtolower
	$lowerString = "CARLOS";
	echo strtolower($lowerString."</br>");

	//upperString
	$upperString = "carlos";
	echo strtoupper($upperString."</br>");

	//substr
	$subsString = "Carlos";
	echo substr($subsString, 0, 3)."</br>";

	//ucfirst
	$ucString = "carlos andré couto";
	echo ucfirst($ucString."</br>");

	//ucwords
	$ucWString = "carlos andre";
	echo ucwords($ucWString."</br>");
 ?>
