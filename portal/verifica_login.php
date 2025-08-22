<?php
    session_start();

    if(!$_SESSION['email']){
        header('Location: login.php');
        exit();
    }

    $usuario = $_SESSION['id_operador'];
    $operador = $_SESSION['nome_operador'];
    $sobrenome_operador = $_SESSION['sobrenome_operador'];
    $nivel = $_SESSION['nivel'];

    $mestre      = 1;
    $colaborador = 2;
    $cliente     = 3;
?>