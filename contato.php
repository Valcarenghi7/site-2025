<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTATO | Pagina 03</title>
    <?php include 'includes-site/head.php'; ?>
</head>
<body>
    <?php include 'includes-site/header.php'; ?>

    <div class="container">
        <h1>Fale Conosco</h1>

        <p>Agradecemos o seu interesse em entrar em contato com a <strong>MC Gestão</strong>. Estamos à disposição para responder às suas dúvidas, fornecer mais informações ou resolver qualquer questão que você tenha.</p>

        <div class="contact-info">
            <h3>Formas de Contato:</h3>
            <ul>
                <li><strong>Telefone:</strong> (55) 9908-80167</li>
                <li><strong>E-mail:</strong> <a href="mailto:contato@empresa.com">contato@empresa.com</a></li>
                <li><strong>Endereço:</strong> Rua 8 de Março, nº 22, Cerro Grande - RS, CEP 97856-000</li>
            </ul>
        </div>

        <form method="POST" action="contato2.php">
            <hr>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="idade">Idade</label>
                    <input type="number" name="idade" class="form-control" placeholder="Digite sua idade" required>
                </div>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="number" name="telefone" class="form-control" placeholder="Digite seu telefone de contato!" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="mensagem">Escreva sua mensagem!</label>
                <textarea class="form-control" name="mensagem" id="mensagem" rows="3" placeholder="Digite seu texto!" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Dados</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </form>

        <hr><br>

        <p class="commitment">Nosso Compromisso: Estamos sempre prontos para ouvir nossos clientes e parceiros. Nossa equipe está comprometida em oferecer um atendimento de qualidade e uma experiência positiva para todos.</p>

        <p class="working-hours">Horário de Atendimento: De segunda a sexta-feira, das 9h às 18h.</p>

        <p>Obrigado por escolher <strong>MC Gestão</strong>! Aguardamos o seu contato e estamos prontos para ajudar.</p>
    </div>

    <?php include 'includes-site/footer.php'; ?>
</body>
</html>
