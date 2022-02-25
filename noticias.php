<?php
session_start();

require_once("backend/obtem_info_secao.php") ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include("include/head.php") ?>

    <title><?php echo $viewpage; echo ' Notícias' ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/noticias.css">
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

        <?php include("include/filtro.php"); ?>

        <section>
            <div class="container-fluid">
                <div id="imgbanner">
                    <img class="img-fluid banner" src="assets/img/bannerNoticias.png" alt="">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="titulofundo">
                            <h1 class="titulo d-flex justify-content-center">Not&iacute;cias</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col noticia">
                        <h4><a class="h4title" href="">Em breve disponivel para Playstation</a></h4>
                        <img class="img-fluid noticiaimg" src="assets/img/noticias1.jpg" height="300px" alt="">
                        <div class="d-flex justify-content-end" style="color: white;">15/11/2021</div>
                        <br>
                        <p>Estamos trabalhando dia e noite para mais essa novidade para nossos players, muito em breve o seu jogo de Zombies disponivel para mais uma plataforma. AGORA FAZEMOS PARTE DA FAMILIA PLAYSTATION...</p>
                    </div>

                    <div class="col noticia">
                        <h4><a class="h4title" href="">Desempenho melhorado em placas NVidia</a></h4>
                        <img class="img-fluid noticiaimg" src="assets/img/noticias2.jpg" height="300px" alt="">
                        <div class="d-flex justify-content-end" style="color: white;">04/11/2021</div>
                        <br>
                        <p>Algumas melhorias foram feitas, pois existia um bug no jogo que limitava o desempenho em placas high end da Nvidia...</p>

                    </div>

                    <div class="col noticia">
                        <h4><a class="h4title" href="">Listado entre os jogos da atualidade</a></h4>
                        <img class="img-fluid noticiaimg" src="assets/img/noticias3.jpg" height="300px" alt="">
                        <div class="d-flex justify-content-end" style="color: white;">08/10/2021</div>
                        <br>
                        <p>Principalmente ultilizado pelo publico jovem (+16anos) Zombies survival recebe nota alta em sites de analize, pelo seu enredo otimo, jogabilidade frenetica, com um multiplayer e battle royale de tirar o folego...</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col noticia">
                        <h4><a class="h4title" href="">Lut Box Melhorado após reclamações</a></h4>
                        <img class="img-fluid noticiaimg" src="assets/img/noticias4.png" height="300px" alt="">
                        <div class="d-flex justify-content-end" style="color: white;">15/09/2021</div>
                        <br>
                        <p>Após algums reclamações abertas em nosso suporte, resolvemos aumentar o lut box das caixas do battle royale, trazendo mais competitividade e item para os players durante as partidas... </p>

                    </div>

                    <div class="col noticia">
                        <h4><a class="h4title" href="">Primeiro campeonato marcado para 2022</a></h4>
                        <img class="img-fluid noticiaimg" src="assets/img/noticias5.jpg" height="300px" alt="">
                        <div class="d-flex justify-content-end" style="color: white;">10/09/2021</div>
                        <br>
                        <p>Após Longo e dificil periodo de pandemia, finalmente temos o nosso primeiro campeonato marcado, com mais de 1500 inscrições para o primeiro semestre de 2022...</p>

                    </div>

                    <div class="col noticia">
                        <h4><a class="h4title" href="">Patch de Atualizações(Patch 1.93)</a></h4>
                        <img class="img-fluid noticiaimg" src="assets/img/noticias6.jpg" height="300px" alt="">
                        <div class="d-flex justify-content-end" style="color: white;">05/09/2021</div>
                        <br>
                        <p>Patch de correções e erros, que envolvia travementos de lot, e loja travada no jogo, melhorias de seguraça e ban de varias contas com Hack...
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php include("include/footer.php") ?>

        <script src="js/carrinhoCompras.js"></script>
        <script src="assets/js/banner-rotativo.js"></script>
        <script src="assets/js/preloader.js"></script>

</body>

</html>