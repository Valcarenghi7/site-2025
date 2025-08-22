<?php 
	session_start();

	if(!$_SESSION['email']) {
		header('Location: login.php');
		exit();
	}

	$usuario 	 = $_SESSION['id_operador'];
	$noperador 	 = $_SESSION['nome_operador'];
	$soperador 	 = $_SESSION['sobrenome_operador'];
	$nivel		 = $_SESSION['nivel'];

	$mestre 	   = 1;
	$administrador = 2;
	$intermediario = 3;
?>