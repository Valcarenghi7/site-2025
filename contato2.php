    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dados Recebidos</title>
        <?php include 'includes-site/head.php'; ?>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body class="bg-light">
    <?php include 'includes-site/header.php'; ?>

    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading"> Recebemos seus dados com sucesso!</h4>
    <hr>
    </div>
        <div class="container mt-5">
            
            <div class="card">
            <div class="card-header bg-primary text-white">
                    <h4>Dados Recebidos do Formulário</h4>
                </div>
                <div class="card-body">
                    <?php

                    if (
                        !empty($_POST['nome']) &&
                        !empty($_POST['idade']) &&
                        !empty($_POST['telefone']) &&
                        !empty($_POST['email']) &&
                        !empty($_POST['mensagem'])
                    ) {

                        $nome = $_POST['nome'];
                        $idade = $_POST['idade'];
                        $telefone = $_POST['telefone'];
                        $email = $_POST['email'];
                        $mensagem = $_POST['mensagem'];


                        echo "<p><strong>Nome:</strong> $nome</p>";
                        echo "<p><strong>Idade:</strong> $idade</p>";
                        echo "<p><strong>Telefone:</strong> $telefone</p>";
                        echo "<p><strong>Email:</strong> $email</p>";
                        echo "<p><strong>Mensagem:</strong> $mensagem</p>";
                    } else {
                        echo '<div class="alert alert-danger">Você precisa preencher todos os campos!</div>';
                    }
                    ?>
                </div>

                <div class="card-footer">
                    <a href="contato.php" class="btn btn-secondary">Voltar para o Contato</a>
                </div>
            </div>
        </div>
    <?php include 'includes-site/footer.php'; ?>
    </body>
    </html>
