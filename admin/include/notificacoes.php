<?php
session_start();
$ip = $_SERVER['REMOTE_ADDR'];
?>

<div class="mensagem">
    <p style="margin-bottom:15px;"><span style="font-size: 14pt;"><b>Notificações</b></span> <a style="float:right; color:black; cursor:pointer;" id="fechar"><i class="fas fa-times-circle"></i></a></p>

    <?php
    $cont = 0;
    $notificacoes_lista = $conexao->prepare("SELECT * FROM acesso WHERE data_acesso >= NOW() - INTERVAL 1 DAY AND ip != '$ip' ORDER BY id DESC;");
    $notificacoes_lista->execute();

    if ($_SESSION['notification'] != "1") :
        while ($notificacoes = $notificacoes_lista->fetch(PDO::FETCH_ASSOC)) : ?>
            <?php $cont++; ?>
            Acesso em <?php echo $notificacoes['pagina_acesso'] ?> as <?php echo date("H:i:s", strtotime($notificacoes['data_acesso'])); ?> <br>
            <hr style="margin-top: 0px;">
        <?php endwhile ?>    
    <?php endif ?>

    <?php if ($_SESSION['notification'] != "1" && $cont > 0) : ?>
        <form action="backend/notificacoes_lidas.php?acao=1" method="post">
            <button type="submit" class="btn btn-success d-flex justify-content-center mt-3" style="margin: auto;">Marcar como lida</button>
        </form>
    <?php else : ?>
        <div class="alert alert-warning" role="alert">
            Nenhuma notificações
        </div>
    <?php endif ?>
</div>

<script>
    $("#fechar").click(function() {
        $(".mensagem").css("display", "none");
    });
</script>