<?php
	//Aula 32 - Receber dados de um formulário
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
<hr>
<form method="post">
	<input type="text" name="email" autocomplete="off" placeholder="Email"><br/>
	<input type="password" name="password"  autocomplete="off" placeholder="Senha"><br/>

	<button type="submit" name="">Enviar Dados</button>
</form>
