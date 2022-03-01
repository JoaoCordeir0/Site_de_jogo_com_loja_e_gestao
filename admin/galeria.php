<?php include("backend/valida_dados_secao.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <?php include("include/head.php") ?>

    <title><?php echo $gestao;
            echo 'Galeria'; ?></title>

    <link rel="stylesheet" href="../assets/css/gestao.css">

    <style>
        .galeria {
            max-width: 100vw;            
            margin-top: 600px;
        }

        .card {
            width: 150px;
            height: 240px;
            background-color: #e4e9f7;
            margin: 20px;
        }

        .card img {
            width: 170px;
            height: 170px;
        }
    </style>
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
                    <!--Conteudo-->
                    <div class="galeria">
                        <div class="row">
                            <?php
                            $galeria = $conexao->prepare("SELECT * FROM usuarios WHERE imgPerfil != 'default.png'");
                            $galeria->execute();

                            while ($fotos = $galeria->fetch(PDO::FETCH_ASSOC)) : ?>
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../assets/img/imgperfil/<?php echo $fotos['imgPerfil'] ?>" class="card-img-top" title="Imagem de perfil" style="max-width:170px;">
                                        <div class="card-body">
                                            <a href="backend/alteraFTperfil.php?id=<?php echo $id?>?foto=<?php echo $fotos['imgPerfil'];?>" class="btn btn-success d-flex justify-content-center">Definir como perfil</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile ?>
                        </div>
                        <!--Fim-->
                    </div>

                    <?php include("include/notificacoes.php"); ?>
                    <?php include("include/footer.php"); ?>
                </div>
            </div>
        </section>
    </div>

    <script src="js/notificacoes.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/relogio.js"></script>
    <script src="../assets/js/preloader.js"></script>
</body>

</html>