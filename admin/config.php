<?php include("backend/valida_dados_secao.php"); ?>
//php
// if(isset($_GET['ip'])){
// $reponse = file_get_contents('https://ipinfo.io/'.$_GET['ip'].'/json');
// $reponse = json_decode($reponse);
// }
//
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <?php include("include/head.php") ?>

    <title><?php echo $gestao;
            echo 'Config'; ?></title>

    <link rel="stylesheet" href="../assets/css/gestao.css">
</head>

<body>
    <div class="pagina">
        <!-- inicio do preloader -->
        <div id="preloader">
            <div class="inner">
                <img src="../assets/img/carregamento_gestao.gif" alt="">
            </div>
        </div>
        <!-- fim do preloader -->

        <?php include("include/menu_superior.php"); ?>
        <?php include("include/menu.php"); ?>

        <section class="home-section">
            <div class="home-content">
                <i class='bx bx-menu'></i>

                <div id="conteudo">
                    <div class="row">
                        <div class="col">
                            <h2>Consultar IP</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col input">
                            <!--<form method="GET" action="config.php">-->
                            <input type="text" name="ip" id="ip" required="" placeholder="Enter IP Address">
                            <button class="btn btn-success" type="">LOCATE</button>
                            <!--</form>-->
                        </div>
                        <div class="col console">
                            <div class="terminal">
                               <p> {
                                &nbsp; &nbsp; &nbsp;"ip": <span>"186.219.149.36",</span> <br>
                                &nbsp; &nbsp; &nbsp;"city": <span>"São João da Boa Vista",</span> <br>
                                &nbsp; &nbsp; &nbsp;"region": <span>"São Paulo",</span> <br>
                                &nbsp; &nbsp; &nbsp;"country":<span> "BR",</span> <br>
                                &nbsp; &nbsp; &nbsp;"loc": <span>"-21.9692,-46.7981",</span> <br>
                                &nbsp; &nbsp; &nbsp;"org": <span>"AS262992 CONEXAO SERVICOS DE COMUNICACAO MULTIMIDIA LTDA-ME",</span> <br>
                                &nbsp; &nbsp; &nbsp;"postal": <span>"13870-000",</span> <br>
                                &nbsp; &nbsp; &nbsp;"timezone": <span>"America/Sao_Paulo",</span> <br>
                                &nbsp; &nbsp; &nbsp;"readme": <span>"https://ipinfo.io/missingauth"</span> <br>
                                }</p>
                            </div>
                        </div>
                    </div>
                    <?php include("include/notificacoes.php"); ?>
                    <?php include("include/footer.php"); ?>
                </div>
            </div>
        </section>
    </div>
    <!-- 
    <div class="mensagemNaoDisponivel">
        <h3 class="mt-3"><i style="color:red;" class="fas fa-exclamation-triangle"></i> ATEN&Ccedil;&Atilde;O</h3>

        <p>A gest&atilde;o n&atilde;o est&aacute; dispon&iacute;vel para celulares ou tablets, acesse a gest&atilde;o por um computador</p>
    </div> -->

    <script src="js/notificacoes.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/relogio.js"></script>
    <script src="../assets/js/preloader.js"></script>
</body>

<style>
    #conteudo {
        margin: auto;
    }
</style>

</html>