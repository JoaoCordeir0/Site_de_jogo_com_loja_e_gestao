<?php
session_start();

$id = $_GET['id'];

require("../connection/conexao.php");

$listagem = $conexao->prepare("SELECT * FROM loja WHERE id = '$id'");
$listagem->execute();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zombie Survival - Pagamento</title>
    <!--bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../assets/css/pagamento.css">
    <!--END-->
    <script src="../js/sweetalert.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col dadosProduto">
                <img id="boacompra" src="../assets/img/logo_boacompra.png" alt="">
                <h2>Dados do produto</h2> <br>

                <?php while ($lista = $listagem->fetch(PDO::FETCH_ASSOC)) : ?>
                    <b>
                        <p>Imagem do produto:</p>
                    </b>
                    <img style="width:100px;" src="../assets/img/imgLoja/<?php echo $lista['imgProduto']; ?>"> <br>
                    <b>Nome do produto:</b> <?php echo $lista['produto']; ?> <br>
                    <b>Quantidade no estoque</b> <?php echo $lista['qtdProduto']; ?> <br>
                    <b>Pre&ccedil;o</b> R$ <?php echo $lista['preco']; ?>,00 <br>

                    <select style="margin-top: 20px; width: 300px;" class="form-select" aria-label="Default select example" id="formaPagamento" name="formaPagamento">
                        <option selected>Forma de pagamento</option>
                        <option value="1">Cart&atilde;o de credito</option>
                        <option value="2">Boleto</option>
                        <option value="3">PIX</option>
                    </select>

                    <button type="button" class="btn btn-primary" style="margin-top: 20px;" onclick="Pagamento()">Continuar</button>

                <?php endwhile ?>
            </div>
            <div class="col">
                <div class="forma1">
                    <?php include("../include/cartao_credito.php"); ?>
                </div>
                <div class="forma2">
                    <?php include("../include/boleto.php"); ?>
                </div>
                <div class="forma3">
                    <?php include("../include/pix.php"); ?>
                </div>
                <div class="botaoConfirmar d-flex justify-content-end" style="display: none !important;">
                    <button style="margin-top: 20px;" class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#sucesso">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include("../include/mensagemSucesso.php"); ?>
<script src="../assets/js/formaPagamento.js"></script>

</html>