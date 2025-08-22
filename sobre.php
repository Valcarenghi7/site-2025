<!DOCTYPE html>
<html>
    <head>
        <title> EMPRESA | Meu Site </title>
        <!------------------------------------ HEAD ------------------------------------>
        <?php include 'includes-site/head.php'; ?>
        <!------------------------------------ HEAD ------------------------------------>
    </head> 
    <body>
        <header>
            <?php include 'includes-site/header.php'; ?>
        </header>

        <br>

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#lista-sobre" role="tab" aria-controls="home">Sobre a Empresa</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#lista-missao" role="tab" aria-controls="profile">Missão</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#lista-visao" role="tab" aria-controls="messages">Visão</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#lista-valores" role="tab" aria-controls="settings">Valores</a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="lista-sobre" role="tabpanel" aria-labelledby="list-home-list"> 
                        <p align="justify"> 
                            Desde 2025, a turma 3-1 tem se dedicado a oferecer as melhores soluções em conectividade, transformando a maneira como empresas e lares se conectam e se comunicam. Com sede em Cerro Grande e sem filiais atualmente, atuamos na região noroeste do estado, sempre com o compromisso de levar tecnologia de ponta e soluções personalizadas para os nossos clientes. 
                        </p>
                    </div>
                    <div class="tab-pane fade" id="lista-missao" role="tabpanel" aria-labelledby="list-profile-list">
                        <p align="justify"> 
                            Conectar pessoas e organizações com excelência.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="lista-visao" role="tabpanel" aria-labelledby="list-messages-list"> 
                        <p align="justify">
                            Inovação: Vai além dos nossos produtos e serviços, está em tudo que fazemos. Ela nos inspira a explorar o potencial das pessoas, transformando limites em possibilidades.

                            Entusiasmo: Nos tornamos mais criativos, produtivos e realizadores. Com entusiasmo, criamos melhores condições para alcançar nossos objetivos.

                            Confiança: É a base para construirmos relações sustentáveis. Acreditamos que devemos ser íntegros em tudo que fazemos das conexões que criamos a forma como executamos nossos processos. É assim que conquistamos confiança e construímos relações e negócios fortes, sérios e duradouros.

                            Foco no cliente: Clientes satisfeitos são mais fiéis à marca, indicam a empresa e a tornam referência, suas opiniões são mais consideradas do que toda a propaganda paga.

                            Visão: Ser empresa referência em bom atendimento e respeito ao cliente, sendo a marca mais lembrada e preferida, entregando conectividade, segurança e entretenimento nas regiões em que atua.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="lista-valores" role="tabpanel" aria-labelledby="list-settings-list">
                         <p> 
                         <i class="fa fa-mail-forward"></i> Inovação

                         <br>

                         <i class="fa fa-mail-forward"></i> Entusiasmo

                         <br>

                         <i class="fa fa-mail-forward"></i> Confiança

                         <br>

                         <i class="fa fa-mail-forward"></i> Foco no Cliente

                         <br>

                         <i class="fa fa-mail-forward"></i> Comprometimento 
                         </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
       
        <br>

        <footer>
            <?php include 'includes-site/footer.php'; ?> 
        </footer>
    </body>
</html>