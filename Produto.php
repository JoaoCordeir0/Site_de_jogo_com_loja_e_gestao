<?php
session_start();

require_once("backend/obtem_info_secao.php");

require("connection/conexao.php");

$user = $_GET['id'];

$listagem = $conexao->prepare("SELECT * FROM loja WHERE ID = '$user'");
$listagem->execute();

$produtos = $listagem->fetch(PDO::FETCH_ASSOC);
$desconto = $produtos['preco'] - 20; 
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include("include/head.php") ?>

    <title><?php echo $viewpage; echo $produtos['produto']; ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/produto.css">
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
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="assets/img/imgLoja/<?php echo $produtos['imgProduto']; ?>" width="300px"> <br>
                        <img src="assets/img/imgLoja/<?php echo $produtos['imgProduto']; ?>" alt="" width="60px" style="margin-top: -10px;">
                        <img src="assets/img/imgLoja/<?php echo $produtos['imgProduto']; ?>" alt="" width="60px" style="margin-top: -10px;">
                        <img id="mobileoff" src="img/imgLoja/<?php echo $produtos['imgProduto']; ?>" alt="" width="60px" style="margin-top: -10px;">
                    </div>
                    <div class="col info">
                        <h1>
                            <?php echo $produtos['produto']; ?>
                        </h1>
                        <div class="especificacoes">
                            <table>
                                <tr>
                                    <td colspan="4" id="disp">Disponibilidade: <span style="color: green;">Disponivel</span></td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="padding-bottom: 10px; text-align: center;">
                                        <h3>PROMOÇÃO</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; font-weight:bold; background-color: red;" width="130px">01 <br> Dias</td>
                                    <td style="text-align: center; font-weight:bold; background-color: red;" width="130px">08 <br> Horas</td>
                                    <td style="text-align: center; font-weight:bold; background-color: red;" width="130px">17 <br> Min</td>
                                    <td style="text-align: center; font-weight:bold; background-color: red;" width="130px">20 <br>Seg</td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <h5 style="padding-top: 10px;"><s style="background-color:red;">R$ <?php echo $produtos['preco'] ?>,00</s> <span style="margin-left: 30px;">R$ <?php echo $desconto ?>,00</span></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="padding-top: 15px;">Em estoque: <span id="estoque"><?php echo $produtos['qtdProduto'] ?></span></td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="padding-top:15px; text-align: center;">
                                        <?php include("include/acoesDecompra-produto.php"); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="padding-top: 15px;">
                                        <p>Não encontrou o item que queria? Aceitamos encomendas! Contacte-nos agora mesmo no chat ou aba "contato" do site.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <i style="margin-left: 10px;" class="fab fa-whatsapp-square"></i>
                                        <i style="margin-left: 10px;" class="fab fa-instagram-square"></i>
                                        <i style="margin-left: 10px;" class="fab fa-discord"></i>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col descricao1">
                        <span style="background-color: red; padding: 5px; font-weight:bold;">Descrição</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col descricao">
                        <p style="color:black;">
                            Float: 0.245 <br> Exterior: Testada em Campo <br> Qualidade: Oculto <br> Sobre o produto:
                            <?php if ($produtos['descricao'] == NULL) : ?>
                                Vazio
                            <?php endif ?>
                            <?php if ($produtos['descricao'] != NULL) : ?>
                                <?php echo $produtos['descricao'] ?>
                            <?php endif ?>
                            <br><br> Você realiza o pedido do produto pelo site e nos envia o comprovante, após confirmado seu pagamento, você nos enviará um link
                            de trade, ele pode ser gerado aqui : https://steamcommunity.com/<br> <br> Logo abaixo tem a url de troca, copie nos envie junto com o número do pedido. Vamos enviar a oferta de troca, você aceita, e pronto, irá receber
                            o produto. (A entrega tem como prazo máximo <b>12</b> a <b>24</b> horas após o envio do link do trade, você não precisa estar online na steam para o recebimento).
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php include("include/footer.php") ?>

        <script src="assets/js/carrinhoCompras.js"></script>
        <script src="assets/js/banner-rotativo.js"></script>
        <script src="assets/js/preloader.js"></script>
        <script src="assets/js/ValidaSessao.js"></script>
        <script src="assets/js/sweetalert.js"></script>

</body>

</html>