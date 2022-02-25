<?php

require("../../connection/conexao_msqli.php");

$acao_acesso = $_GET['acao_acesso'];
$acao_email = $_GET['acao_email'];

if ($acao_acesso == 'acesso') {
    if (isset($_COOKIE["Identifica_user"])) {
        if ($_COOKIE["Identifica_user"] == 000) {
            $delete_acesso = "DELETE FROM acesso";
            $resultado_usuario = mysqli_query($conn, $delete_acesso);
            if (mysqli_affected_rows($conn)) {
                echo "<script>window.location = '../acesso?acao=sucess'</script>";
            } else {
                echo "<script>window.location = '../acesso?acao=error'</script>";
            }
        } else {
            echo "<script>window.location = '../acesso?acao=error'</script>";
        }
    }
}

if ($acao_email == 'email') {
    if (isset($_COOKIE["Identifica_user"])) {
        if ($_COOKIE["Identifica_user"] == 000) {
            $delete_acesso = "DELETE FROM registro_emails";
            $resultado_usuario = mysqli_query($conn, $delete_acesso);
            if (mysqli_affected_rows($conn)) {
                echo "<script>window.location = '../email?acao=sucess'</script>";
            } else {
                echo "<script>window.location = '../email?acao=error'</script>";
            }
        } else {
            echo "<script>window.location = '../email?acao=error'</script>";
        }
    }
}

?>