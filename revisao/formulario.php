<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Contato</title>
</head>
<body>
    <h1>Formulário de Contato (Método GET)</h1>
    <p>Preencha os dados abaixo para enviar sua mensagem.</p>

    <form action="processa_dados.php" method="POST">
        <table border="1" width="400">
            <tr>
                <td><label for="campo_nome">* Nome:</label></td>
                <td><input type="text" id="nome_usuario" name="nome_usuario" size="30" placeholder="Informe seu nome completo" required></td>
            </tr>
            <tr>
                <td><label for="campo_email">Email:</label></td>
                <td><input type="email" id="email_usuario" name="email_usuario" size="30" placeholder="seuemail@domino.com"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Enviar Dados</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>