<?php
require("../../connection/conexao_msqli.php");

$idSenior = $_GET['idUsuario'];
$id = $_GET['id'];
$msgSucesso = 'Produto da loja deletado com sucesso';
$msgErro = 'Você não tem permissão para excluir';
$msgErro2 = 'Houve um erro ao consultar os cokies, atualize a página e tente denovo';

if (isset($_COOKIE["Identifica_user"])) {
    if ($_COOKIE["Identifica_user"] == 000) {
        $result_acesso = "DELETE FROM loja WHERE id = '$id'";
        $resultado_usuario = mysqli_query($conn, $result_acesso);
        if (mysqli_affected_rows($conn)) {
            echo "<script>window.location = '../loja?acao=sucess'</script>";
        } else {
            echo "<script>window.location = '../loja?acao=erro'</script>";
        }
    } else {
        echo "<script>window.location = '../loja?acao=erro'</script>";
    }
} else {
    echo "<script>window.location = '../loja?acao=erro_cookie'</script>";
}
