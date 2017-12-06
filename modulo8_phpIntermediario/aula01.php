<?php
	//Aula 01 - While
	$lAt = 5;
	$lTotal = 19;

	while ($lAt < $lTotal) {
		$lAt ++;
		echo "Litros atuais =".$lAt."</br>";

		if ($lAt == $lTotal ) {
			echo "<h3>TANQUE CHEIO!</h3>";
		}
	};

	//$lAt ++; imprime depois incrementa
	//++$lAt; Incrementa depois imprime

	$valor1 = 5;
	$valor2 = 5;
	echo 'Exemplo $lAt++ = '.$valor1++;
		echo "<hr>";
	echo 'Exemplo ++$lAt = '.++$valor2;
?>
