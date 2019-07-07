<?php

	include ("db-conector.php");

	$nome = $_POST['nome'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	try {
		$sql = "INSERT INTO clientes (clinome, cliemail, clisenha) VALUES ('$nome', '$usuario', '$senha')";
		
		$query = $pdo->prepare($sql);
		$query->execute();
		header ('location:../login.php');
	}
	catch(PDOException $ex){
		echo($ex->getMessage());
	}
?>