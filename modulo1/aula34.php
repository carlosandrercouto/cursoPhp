<?php
	//Aula 34 - Switch
	$x = 6;

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
			echo "Valor nao encontrado";
	}
?>
