<?php
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);
    //error_reporting(E_ALL);

    session_start();
    include('conexao.php');

    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['email']) || empty($_POST['senha'])) {
            header('Location: login.php');
            exit();
        }

        $email  = mysqli_real_escape_string($conexao, $_POST['email']);
        $senha  = mysqli_real_escape_string($conexao, $_POST['senha']);

        $query      = "SELECT * FROM operadores
                       WHERE BINARY email = '{$email}' and senha = '{$senha}'";

        $result     = $conexao->query($query) or die($conexao->error);

        while($dado = $result->fetch_array()) {
            $id_operador        = $dado['id_operador'];
            $nome_operador      = $dado['nome_operador'];
            $sobrenome_operador = $dado['sobrenome_operador'];
            $nivel              = $dado['nivel'];
        }

        $row = mysqli_num_rows($result);

        if($row == 1) {
            $_SESSION['id_operador']        = $id_operador;
            $_SESSION['nome_operador']      = $nome_operador;
            $_SESSION['sobrenome_operador'] = $sobrenome_operador;
            $_SESSION['email']              = $email;
            $_SESSION['nivel']              = $nivel;

            header('Location: index.php');
            exit();
        } else {
            $_SESSION['nao_autenticado'] = true;
            header('Location: login.php');
            exit();
        }
    } else {
        header('Location: login.php');
        exit();
    }
?>