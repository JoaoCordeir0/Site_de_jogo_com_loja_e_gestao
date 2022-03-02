<?php include("backend/valida_dados_secao.php"); ?>
<?php
// if(isset($_GET['ip'])){
// $reponse = file_get_contents('https://api.ip2location.com/v2/?ip='.$_GET['ip'].'&key={YOUR_API_KEY}&package=WS25');
// $reponse = json_decode($reponse);
//}
//?>

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

                <div id="conteudo" style="margin-left:-45px;">
                
                    <iframe style="margin:auto; width:96vw !important; height:100vh !important;" src="http://cordeirovsk.com.br/" frameborder="0">Carrregando <img src="../assets/img/salvando.gif" alt=""></iframe>

                    <?php include("include/notificacoes.php"); ?>                   
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