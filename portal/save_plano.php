    <?php
    include('verifica_login.php');
    include('conexao.php');

    $niveldapagina = array($mestre, $colaborador);
    $id_plano      = filter_input(INPUT_GET, 'id_plano', FILTER_SANITIZE_NUMBER_INT);

    if(!in_array ($nivel, $niveldapagina)){
        echo
            "<script>
                    alert('Você não tem permissão para acessar essa área!
                    history.go(-1);
            </script>";
    }else if(!empty($_POST['nome_plano'])){

        $nome_plano = $_POST['nome_plano'];
        $desc_plano = $_POST['desc_plano'];
        $vlr_plano = $_POST['vlr_plano'];

         $consultaPlano = "SELECT * FROM planos
                            WHERE id_plano = '$id_plano'";

        $sql_code = "UPDATE planos SET nome_plano='$nome_plano', desc_plano='$desc_plano', vlr_plano='$vlr_plano' WHERE id_plano = '$id_plano";
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