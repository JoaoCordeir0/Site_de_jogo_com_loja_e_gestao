<?php
if (isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) :
    require("connection/conexao.php");

    $_SESSION['usuarioNome'];
    $_SESSION['idUsuario'];
    $id = $_SESSION['idUsuario'];
?>
    <a id="botaoCarrinho" href="backend/carrinho.php?id=<?php echo $produtos['id']; ?>"><i class="fas fa-shopping-cart carrinhocompra"></i></a>
    <a id="comprar" href="acoes/pagamento.php?id=<?php echo $produtos['id']; ?>" class="btn btn-primary">Comprar </a>
<?php endif ?>

<?php if (!isset($_SESSION["usuario"])) : ?>
    <a id="botaoCarrinho" href="#"><i class="fas fa-shopping-cart carrinhocompra" onclick="ValidaSessao()"></i></a>
    <a id="comprar" href="#" class="btn btn-primary" onclick="ValidaSessao()">Comprar </a>   
<?php endif ?>