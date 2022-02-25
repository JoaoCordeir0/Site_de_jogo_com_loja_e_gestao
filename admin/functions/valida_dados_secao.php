<?php
session_start();

if (isset($_SESSION["adm"]) && is_array($_SESSION["adm"])) {
    require("../../connection/conexao.php"); //conexao paginas gestao     

    $id =  $_SESSION['idUsuario'];
    $_SESSION['usuarioNome'];
    setcookie("Identifica_user", $id);    

    $listagem = $conexao->prepare("SELECT * FROM usuarios WHERE ID = '$id'");
    $listagem->execute();

    $user = $listagem->fetch(PDO::FETCH_ASSOC);
} else {
    echo "<script>window.location = '../index'</script>";
}
?>