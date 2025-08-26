<?php
    include('verifica_login.php');
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <title> INÍCIO | Meu Portal </title>
        <?php include 'includes-portal/head.php'; ?>
    </head>
    <body>
        <header>
            <?php include 'includes-portal/header.php'; ?>
        </header>
        <div class="container">
            <br>

            <center><h5> PREENCHA OS CAMPOS ABAIXO PARA ADICIONAR UM NOVO PLANO </h5></center>

            <hr>

            <form>
                <div class="form-row">
                    <div class="col">
                        <label for="nomePlano">* Nome</label>
                        <input type="text" class="form-control" placeholder="Nome do plano">
                    </div>
                    <div class="col">
                        <label for="descricaoPlano">* Descrição</label>
                        <input type="text" class="form-control" placeholder="Descreva detalhes do plano">
                    </div>
                    <div class="col">
                        <label for="valorPlano">* Valor</label>
                        <input type="text" class="form-control" placeholder="R$ 0,00">
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary" name="send" id="send">
                    <i class='fa fa-paste' style="font-size:25px";></i>
                Cadastrar
                </button>
                <button type="button" class="btn btn-warning" name="limpa" id="limpa" onclick='form.reset()'>
                <i class='fa fa-eraser' style="font-size:25px;"></i>
                <br>
                Limpar
                </button>
            </form>

            <br>
        </div>
        <footer>
            <?php include 'includes-portal/footer.php'; ?>
        </footer>
    </body>
</html>
