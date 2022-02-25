<div class="mensagem">
    <p style="margin-bottom:15px;"><span style="font-size: 14pt;"><b>Carrinho de compras</b></span> <a style="float:right; color:black;" href="#x"><i class="fas fa-times-circle"></i></a></p>
    <?php
    require("connection/conexao.php");
    $cont = 0;

    $listagem = $conexao->prepare("SELECT * FROM loja");
    $listagem->execute();

    while ($lista = $listagem->fetch(PDO::FETCH_ASSOC)) : ?>
        <?php if ($lista['status'] == 2) : ?>
            <p>
                <a href="backend/removeCarrinho.php?id=<?php echo $lista['id'] ?>" style="color: black;"><i class="fas fa-times me-3"></i></a> <?php echo $lista['produto'] ?> <span style="float: right;"> R$: <?php echo $lista['preco'] ?></span>
            </p>
            <hr style="margin-top: -10px;">
        <?php endif ?>

        <?php if ($lista['status'] == 2) {
            $cont++;
        } ?>
    <?php endwhile ?>

    <?php if ($cont >= 1) : ?>
        <a href="acoes/pagamentoMultiProdutos.php" class="btn btn-primary">Prosseguir para o pagamento</a>
    <?php else : ?>
        <div class="alert alert-warning" role="alert">
            Voc&ecirc; n&atilde;o possui produtos!
        </div>
    <?php endif ?>
</div>

<script>
    $("a[href='#x']").click(function() {
        $(".mensagem").css("display", "none");
    });
</script>