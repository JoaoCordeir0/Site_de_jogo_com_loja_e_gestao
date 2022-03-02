<?php include("backend/valida_dados_secao.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <?php include("include/head.php") ?>

    <title><?php echo $gestao;
            echo 'Galeria'; ?></title>

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
                        <h3 id="H3_banco_imagens"> <i class="bx bxs-photo-album"></i> Banco de imagens do perfil</h3>
                        <?php
                        $galeria = $conexao->prepare("SELECT * FROM galeria WHERE caminho = 1");
                        $galeria->execute();

                        while ($fotos = $galeria->fetch(PDO::FETCH_ASSOC)) : ?>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img src="../assets/img/imgperfil/<?php echo $fotos['nome_img'] ?>" class="card-img-top" title="Imagem de perfil" style="max-width:170px; max-height:150px;">
                                    <div class="card-body" style="margin: auto;">
                                        <a title="Definir como foto de perfil" href="backend/alteraFTperfil?foto=<?php echo $fotos['nome_img'];?>" class="btn btn-success"><i class='bx bx-show'></i> <i class='bx bxs-user' ></i></a>  <a download="" href="../assets/img/imgLoja/<?php echo $fotos['nome_img'] ?>" class="btn btn-success"> <i class='bx bx-download'></i> </a>  <a href="backend/apagaFTperfil?apagarFoto=<?php echo $fotos['id'] ?>" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </div>
                            </div>                      
                        <?php endwhile ?>
                    </div>

                    <div class="row">
                        <h3 id="H3_banco_imagens"> <i class="bx bxs-photo-album"></i> Banco de imagens da loja</h3>
                        <?php
                        $galeria = $conexao->prepare("SELECT * FROM galeria WHERE caminho = 2");
                        $galeria->execute();

                        while ($fotos = $galeria->fetch(PDO::FETCH_ASSOC)) : ?>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img src="../assets/img/imgLoja/<?php echo $fotos['nome_img'] ?>" class="card-img-top" title="Imagem da loja" style="max-width:170px; max-height:150px;">
                                    <div class="card-body" style="margin: auto;">
                                        <a download="" href="../assets/img/imgLoja/<?php echo $fotos['nome_img'] ?>" class="btn btn-success"> <i class='bx bx-download'></i> </a> <a href="backend/apagaFTperfil?apagarFoto=<?php echo $fotos['id'] ?>" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </div>
                            </div>                      
                        <?php endwhile ?>
                    </div>
                    
                    <div class="row">
                        <h3 id="H3_banco_imagens"> <i class="bx bxs-photo-album"></i> Banco de imagens do site</h3>
                        <?php
                        $galeria = $conexao->prepare("SELECT * FROM galeria WHERE caminho = 0");
                        $galeria->execute();

                        while ($fotos = $galeria->fetch(PDO::FETCH_ASSOC)) : ?>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img src="../assets/img/<?php echo $fotos['nome_img'] ?>" class="card-img-top" title="Imagem do site" style="max-width:170px; max-height:150px;">
                                    <div class="card-body" style="margin: auto;">
                                        <a download="" href="../assets/img/imgLoja/<?php echo $fotos['nome_img'] ?>" class="btn btn-success"> <i class='bx bx-download'></i> </a> <a href="backend/apagaFTperfil?apagarFoto=<?php echo $fotos['id'] ?>" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </div>
                            </div>                      
                        <?php endwhile ?>
                    </div>                

                    <?php include("include/notificacoes.php"); ?>
                </div>
            </div>
        </section>
    </div>

    <script src="js/notificacoes.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/relogio.js"></script>
    <script src="../assets/js/preloader.js"></script>
    <script src="../assets/js/sweetalert.js"></script>
    <?php include("functions/alerts.php");?> 
</body>

</html>