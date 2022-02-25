
<?php
require("../../connection/conexao_msqli.php");

$id = $_GET['id'];

if (isset($_COOKIE["Identifica_user"])) {
    if ($_COOKIE["Identifica_user"] == 000) {
        $result_acesso = "DELETE FROM registro_emails WHERE id = '$id'";
        $resultado_acesso = mysqli_query($conn, $result_acesso);
        if (mysqli_affected_rows($conn)) {
            echo "<script>window.location = '../email?acao=sucess'</script>";
        } else {
            echo "<script>window.location = '../email?acao=erro'</script>";
        }
    } else {
        echo "<script>window.location = '../email?acao=erro'</script>";
    }
} else {
    echo "<script>window.location = '../email?acao=erro_cookie'</script>";
}

