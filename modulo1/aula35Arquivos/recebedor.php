<?php
	//Aula 33 - Receber dados de um formulário
	if (isset($_POST['email']) && !empty($_POST['email']))
	{
		if (isset($_POST['password']) && !empty($_POST['password']))
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
			echo "Meu email é: ".$email." e minha senha é: ".$password;

		}
	}
?>
