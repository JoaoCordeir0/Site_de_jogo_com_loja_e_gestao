<?php 
session_start();

require_once("backend/obtem_info_secao.php")?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <?php include("include/head.php")?>

    <title><?php echo $viewpage; echo ' Home'?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/preloader.css">

</head>

<body>
    <main>

        <!-- inicio do preloader -->
        <div id="preloader">
            <div class="inner">
               <img src="assets/img/preloader.gif" alt="">
            </div>
        </div>
        <!-- fim do preloader -->
        
        <?php include("include/header.php"); ?>

        <?php include("include/faleConosco.php"); ?>

        <?php include("include/editaPerfil.php"); ?>

        <?php include("include/carrinho.php"); ?>

        <?php include("include/search.php"); ?>

        <?php include("include/carrinhoMobile.php"); ?>

        <section>
            <div class="container-fluid">
                <div id="imgbanner">
                    <img class="img-fluid banner" src="assets/img/banner2.jpg" /> <img class="img-fluid banenrMobile" src="assets/img/fundo_mobile.png" alt="">
                </div>

                <div class="row">
                    <div class="col">
                        <div id="info">
                            <h1><span style="font-size: 75pt;">Z</span>OMBIE <br> <span style="font-size: 75pt;">S</span>URVIVAL</h1>
                            <button><a href="https://www.trex-game.skipser.com/" target="_blank">JOGAR AGORA</a> <i style="margin-left: 10px;" class="fas fa-download"></i></button> <br>
                            <button id="trailer">ASSISTA O TRAILER <i style="margin-left: 10px;" class="fas fa-video"></i></button> <br>
                            <i class="fab fa-steam plataformaTopo"></i>
                            <i class="fab fa-google-play plataformaTopo"></i>
                            <i class="fab fa-playstation plataformaTopo"></i>
                            <i class="fab fa-xbox plataformaTopo"></i>
                        </div>
                    </div>
                    <!--<div class="col">
                        <img id="bannerTopo" class="img-fluid" src="img/banner2.jpg" height="300px" alt="">
                    </div> -->
                </div>
            </div>

            <div class="container">
                <div class="titulo">
                    <h1 class="titulo">ULTIMAS NOT&Iacute;CIAS</h1>
                </div>
                <div class="row">
                    <div class="col">
                        <img class="img-fluid" src="assets/img/noticias-1.png" height="300px" alt="">
                    </div>
                    <div class="col">
                        <img class="img-fluid" src="assets/img/noticias-2.png" height="300px" alt="">
                    </div>
                    <div class="col">
                        <img class="img-fluid" src="assets/img/noticias-3.png" height="300px" alt="">
                    </div>
                </div>
                <div class="paginaNoticias">
                    <a href="noticias.php" class="linkconteudo">PAGINA DE NOTICIAS <i class="fas fa-arrow-circle-right"></i></a>
                </div>

                <div class="titulo">
                    <h1 class="titulo">NOVIDADES</h1>
                </div>

                <div class="row">
                    <div class="col">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                            a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                    <div class="col">
                        <img style="border:3px solid white; border-radius: 5px;" class="img-fluid" src="assets/img/novidades.jpg" height="300px" alt="">
                    </div>
                </div>
                <div class="paginaNoticias">
                    <a target="_blank" href="https://discord.gg/Bvm9u7E9" class="linkconteudo">PAGINA DA COMUNIDADE <i class="fas fa-arrow-circle-right"></i></a>
                </div>

                <div class="titulo">
                    <h1 class="titulo">LOJA</h1>
                </div>

                <div class="row">
                    <div class="col">
                        <img style="border:3px solid white; border-radius: 5px;" class="img-fluid" src="assets/img/soldado.jpg" height="300px" alt="">
                    </div>
                    <div class="col">
                        <h2 id="skin" class="titulo">SKINS</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                            a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                </div>
                <div class="paginaNoticias">
                    <a href="loja.php" class="linkconteudo">IR PARA A LOJA <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </section>

        <?php include("include/footer.php") ?>

        <!-- <script src="assets/jss/banner-rotativo.js"></script> -->
        <script src="assets/js/preloader.js"></script>
        <script src="assets/js/carrinhoCompras.js"></script>

</body>

</html>