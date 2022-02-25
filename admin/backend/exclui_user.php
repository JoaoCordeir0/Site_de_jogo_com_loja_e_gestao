<?php
require("../../connection/conexao_msqli.php");

$id = $_GET['id']; //id da lista de usuarios executa essa função:

if (isset($id)) {
    if (isset($_COOKIE["Identifica_user"])) {
        if ($_COOKIE["Identifica_user"] == 000) {
            $result_acesso = "DELETE FROM  usuarios WHERE ID = '$id' AND ID != 000";
            $resultado_usuario = mysqli_query($conn, $result_acesso);
            if (mysqli_affected_rows($conn)) {
                echo "<script>window.location = '../user?acao=sucess'</script>";
            } else {
                echo "<script>window.location = '../user?acao=erro'</script>";
            }
        } else {
            echo "<script>window.location = '../user?acao=erro'</script>";
        }
    } else {
        echo "<script>window.location = '../user?acao=erro_cookie'</script>";
    }
}

$id_gestor = $_GET['id_gestor']; //id da lista de gestores executa esta função:

if (isset($id_gestor)) {
    if (isset($_COOKIE["Identifica_user"])) {
        if ($_COOKIE["Identifica_user"] == 000) {
            $result_acesso = "DELETE FROM  usuarios WHERE ID = '$id_gestor' AND ID != 000";
            $resultado_usuario = mysqli_query($conn, $result_acesso);
            if (mysqli_affected_rows($conn)) {
                echo "<script>window.location = '../gestores?acao=sucess'</script>";
            } else {
                echo "<script>window.location = '../gestores?acao=erro'</script>";
            }
        } else {
            echo "<script>window.location = '../gestores?acao=erro'</script>";
        }
    } else {
        echo "<script>window.location = '../gestores?acao=erro_cookie'</script>";
    }
}