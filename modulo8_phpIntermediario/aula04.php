<?php
	//Aula 04 - Funções
	header("Content-type: text/html; charset=utf-8");

	function somarNumero($x, $y)
	{
		$conta = $x + $y;

		return $conta;
	}

	$resultado = somarNumero(50, 20);
	echo  "O resultado é: ".$resultado;

 ?>
