<?php
	//Aula 35 - Usando multiplos arquivos PHP

	//Stop na execucao caso haja algum erro
	include "aula35Arquivos/recebedor.php";

	//*Nao da stop na execucao caso ocorra algum erro
	//require "aula35Arquivos/recebedor.php";
	//*Importa o arquivo uma unica vez
	//require_once "aula35Arquivos/recebedor.php";
?>
<hr>
<form method="post">
	<input type="text" name="email" autocomplete="off" placeholder="Email"><br/>
	<input type="password" name="password"  autocomplete="off" placeholder="Senha"><br/>

	<button type="submit" name="">Enviar Dados</button>
</form>
