<?php
session_start();

require_once("backend/obtem_info_secao.php") ?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include("include/head.php") ?>

    <title><?php echo $viewpage; echo ' Loja' ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/loja.css">
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
                <div class="TextBanner">
                    <div class="row">
                        <div class="col-md-6">
                            <img id="imgLoja" class="img-fluid" src="assets/img/banner-ak.png" alt="" height="189px">
                        </div>
                        <div class="col-md-3">
                            <img id="imgLoja" class="img-fluid" src="assets/img/banner2-loja.png" alt="">
                        </div>
                        <div class="col-md-3">
                            <img id="imgLoja" class="img-fluid" src="assets/img/banner3-loja.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="banner-loja-mobile">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="" alt="" class="img-fluid bannerRotativo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row" style="color:white; margin-top:20px;">
                    <div class="d-flex justify-content-between">
                        <div>
                            <a id="buttonloja" href="#" class="btn btn-primary">ORDENAÇÃO <i class="fas fa-sort-down"></i></a>
                        </div>
                        <div>
                            <a id="buttonloja" href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#filtro"><i class="fas fa-filter"></i> FILTRO</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    require("connection/conexao.php");

                    $preco1 = $_POST['preco1'];
                    $preco2 = $_POST['preco2'];

                    if (empty($preco1) && empty($preco2) && empty($cor)) {
                        $listagem = $conexao->prepare("SELECT * FROM loja");
                        $listagem->execute();
                    }

                    if (isset($preco1) && isset($preco2)) {
                        $listagem = $conexao->prepare("SELECT * FROM loja WHERE preco > '$preco1' AND preco < '$preco2'");
                        $listagem->execute();
                    }

                    while ($lista = $listagem->fetch(PDO::FETCH_ASSOC)) :
                    ?>
                        <?php if ($lista['status'] == 1 || $lista['status'] == 2) : ?>
                            <div class="card">
                                <a href="Produto.php?id=<?php echo $lista['id']; ?>"><img src="assets/img/imgLoja/<?php echo $lista['imgProduto']; ?>" class="card-img-top"></a>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $lista['produto']; ?>
                                    </h5>
                                    <?php if ($lista['qtdProduto'] == 0) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            Sem estoque!
                                        </div>
                                    <?php endif ?>
                                    <?php if ($lista['qtdProduto'] != 0) : ?>
                                        <p class="card-text">
                                            R$: <?php echo $lista['preco']; ?>,00 <br>
                                            Em estoque: <?php echo $lista['qtdProduto']; ?>
                                            <?php $user = $lista['id']; ?>
                                        </p>
                                        <?php include("include/acoesDecompra-loja.php"); ?>
                                    <?php endif ?>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php
                    endwhile;
                    ?>
                </div>
            </div>

        </section>
       
        <?php include("include/footer.php") ?>

        <script src="assets/js/carrinhoCompras.js"></script>
        <script src="assets/js/banner-rotativo.js"></script>
        <script src="assets/js/sweetalert.js"></script>
        <script src="assets/js/ValidaSessao.js"></script>
        <script src="assets/js/preloader.js"></script>

</body>

</html>