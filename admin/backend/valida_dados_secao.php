<?php
session_start();

if (isset($_SESSION["adm"]) && is_array($_SESSION["adm"])) {
    require("../connection/conexao.php"); //conexao paginas gestao 
    require("backend/relatorio_acesso.php");

    $id =  $_SESSION['idUsuario'];
    $_SESSION['usuarioNome'];
    $_SESSION['New_notification'] = "False";
    setcookie("Identifica_user", $id);

    $listagem = $conexao->prepare("SELECT * FROM usuarios WHERE ID = '$id'");
    $listagem->execute();

    $user = $listagem->fetch(PDO::FETCH_ASSOC);

    $cont = 0;
    $notificacoes_lista = $conexao->prepare("SELECT * FROM acesso WHERE data_acesso >= NOW() - INTERVAL 1 DAY AND ip != '$ip'");
    $notificacoes_lista->execute();

    while ($notificacoes = $notificacoes_lista->fetch(PDO::FETCH_ASSOC)) {
        $cont++;
    }        
} else {
    echo "<script>window.location = '../index'</script>";
}
