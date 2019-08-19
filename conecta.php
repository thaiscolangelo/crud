<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "etecmcm";

	$conexao = new Mysqli("$host","$usuario","$senha","$banco");

	if ($conexao->connect_error){
		echo "Erro de conexão!!!";
	} 
	else {
		echo "Conexão bem sucedida";
	}
?>