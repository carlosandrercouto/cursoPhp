<?php
	//Aula 36 - Encode

	header("Content-type: text/html; charset=utf-8");

	$x = 60;

	switch ($x)
	{
		case 0:
			echo "O valor de x e: ".$x;
			break;
		case 1:
			echo "O valor de x e: ".$x;
			break;
		case 2:
			echo "O valor de x e: ".$x;
			break;

		case 5:
		case 6:
		case 7:
			echo "O valor é mais que 5, 6 ou 7";
			break;
		default:
			echo "Valor não encontrado";
	}
?>
