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
    }else if(!empty($_POST['nome_plano'])OR !empty($_POST['desc_plano']) OR !empty($_POST['vlr_plano'])){

        $nome_plano = $_POST['nome_plano'];
        $desc_plano = $_POST['desc_plano'];
        $vlr_plano = $_POST['vlr_plano'];

        $sql_code = "INSERT INTO planos (nome_plano, desc_plano, vlr_plano, dt_cad_plano) VALUES ('$nome_plano', '$desc_plano', '$vlr_plano', NOW())";

        if($conexao->query($sql_code) or die($conexao->error)){
            $_SESSION['msgListaPlano'] = "<center><div class='alert alert-success' role='alert'> OK, plano inserido com sucesso!</div></center>";
            header("Location:lista_plano.php");
        } else{
            $_SESSION['msgListaPlano'] = "<center><div class='alert alert-danger' role='alert'> ERRO, plano não foi inserido com sucesso!</div></center>";
        header("Location:lista_plano.php");
        }

    } else {
        echo
        "<script>
            alert('VIOLAÇÃO: tentativa ilegal de operação!')
            history.go(-1);
        </script>";
    }
    ?>