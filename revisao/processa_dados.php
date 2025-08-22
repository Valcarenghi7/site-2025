<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados Recebidos</title>
</head>
<body>
    <h1>Dados Recebidos do Formulário</h1>
    <hr>

    <?php
        if (!empty($_POST['email_usuario']) AND !empty($_POST['nome_usuario'])) {
            $nome   = $_POST['nome_usuario'];
            $email  = $_POST['email_usuario'];

            echo "<h2> Olá, ".$nome."!</h2>";
            echo "<p> Recebemos seus dados. Seu email é: <strong>".$email."</strong></p>";
        } else {
            echo "<script>
                    alert('VIOLAÇÃO: Tentativa ilegal de operação!')
                  </script>";
        }

        echo "<br>";
    ?>

    <a href="formulario.php"> Voltar para o formuláio </a>

    <hr>
</body>
</html>