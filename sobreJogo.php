<?php
session_start();

require_once("backend/obtem_info_secao.php") ?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include("include/head.php") ?>

    <title><?php echo $viewpage; echo ' Sobre o jogo' ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/noticias.css">
    <link rel="stylesheet" href="assets/css/preloader.css">
</head>

<body>

    <!-- inicio do preloader -->
    <div id="preloader">
        <div class="inner">
            <img src="assets/img/preloader.gif" alt="">
        </div>
    </div>
    <!-- fim do preloader -->

    <main>
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
                            <h1 class="titulo">Sobre o jogo</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h3 class="h4title" style="min-width: 300px;">Oque é</h3>
                        <p>
                            Zombies Survival surgiu de uma ideia do planeta terra, se passa no futuro onde a humanidade com sua alta arrogancia
                            e desejo de poder entre as naçoes, desenvolveram uma arma biologica com o intuito de controlar pessoas,para que nao atrapalhasem a idealização
                            de poder de algumas naçoes. Mas dando tudo errado criando uma arma biologica que era capaz de mutar seres humanos os transformando em
                            criaturas sem conciencia mental se tornando altamente agrecivas e em constante decomposição sendo batizados de zumbies(Mortos-Vivos)
                        </p>
                    </div>

                    <div class="col">
                        <h3 class="h4title" style="min-width: 300px;">Desenvolvimento</h3>
                        <p>
                            Nosso jogo é desenvolvido pelo Unreal engine,O Unreal Engine, em suas várias versões, é um motor de jogos (também
                            chamado de “engine”, ou “motor gráfico”, embora suas ferramentas vão além disso), usado na indústria para a criação
                            de games de vários tipos e destinados a várias plataformas,Motor de jogos (ou motor gráfico, como também são conhecidos)
                            , é uma tecnologia de infraestrutura (ou “framework”) que desenvolvedores utilizam para criar jogos.
                        </p>

                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h1 class="h4title" style="margin-top:20px; margin-bottom:10px;">Equipe</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5 class="h4title">João Victor Cordeiro</h5>
                        <img id="equipe" src="assets/img/Ceo-cordeiro.png" style=" margin-right: 10px; float:left">

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                            make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                            PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>

                    <div class="col">
                        <h5 class="h4title">Lucas Gabryel</h5>
                        <img id="equipe" src="assets/img/Ceo-lucas.png" style=" margin-right: 10px; float:left">
                        <p style=>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                            make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                            PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php include("include/footer.php") ?>

        <script src="assets/js/banner-rotativo.js"></script>
        <script src="assets/js/carrinhoCompras.js"></script>
        <script src="assets/js/preloader.js"></script>
</body>

</html>