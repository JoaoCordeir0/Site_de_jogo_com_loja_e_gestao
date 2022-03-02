<?php
require("../../connection/conexao_msqli.php");
$delete = $_GET['apagarFoto'];

if (isset($_COOKIE["Identifica_user"]) && isset($delete)) {
    if ($_COOKIE["Identifica_user"] == 000) {
        $apaga_foto = "DELETE FROM galeria wHERE id = '$delete'";
        $resultado_apagaFoto = mysqli_query($conn, $apaga_foto);
        if (mysqli_affected_rows($conn)) {
            echo "<script>window.location = '../galeria?acao=sucess'</script>";
        } else {
            echo "<script>window.location = '../galeria?acao=erro'</script>";
        }
    } else {
        echo "<script>window.location = '../galeria?acao=erro'</script>";
    }
} else {
    echo "<script>window.location = '../galeria?acao=erro'</script>";
}

?>