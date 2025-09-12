<?php
include('verifica_login.php');
include('conexao.php');

$niveldapagina = array($mestre, $colaborador);

if(!in_array ($nivel, $niveldapagina)){
    echo
        "<script>
                alert('Você não tem permissão para acessar essa área!
                history.go(-1);
        </script>";
}
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
            <?php
                if(isset($_SESSION['msgFormPlano'])){
                    echo $_SESSION['msgFormPlano'];
                    unset($_SESSION['msgFormPlano']);
                }
            ?>
            <form action="cad_plano.php" method="POST">
                <div class="form-row">
                    <div class="col">
                        <label for="nomePlano">* Nome</label>
                        <input type="text" class="form-control"  id="nome_plano" name="nome_plano" placeholder="Nome do plano">
                    </div>
                    <div class="col">
                        <label for="descricaoPlano">* Descrição</label>
                        <input type="text" class="form-control" id="desc_plano" name="desc_plano" placeholder="Descreva detalhes do plano">
                    </div>
                    <div class="col">
                        <label for="valorPlano">* Valor</label>
                        <input type="text" class="form-control" id="vlr_plano" name="vlr_plano"placeholder="R$ 0,00">
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
