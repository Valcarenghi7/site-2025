<?php
    //DEFINE O FUSO HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');

    $dataLocal =date('Y/m/d H:i:s', time());

    header('Content-type: text/html; charset=utf-8');

    define('HOST', 'localhost');
    define('USUARIO', 'root');
    define('SENHA', '');
    define('DB', 'meusite31');

    $conexao= mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');

    mysqli_set_charset($conexao, "utf8");

    mysqli_query($conexao, "SET NAMES 'utf8'");
    mysqli_query($conexao,'SET character_set_connection=utf8');
    mysqli_query($conexao,'SET character_set_client=utf8');
    mysqli_query($conexao,'SET character_set_results=utf8');
?>