<?php

require("../../connection/conexao_msqli.php");

$foto = $_GET['foto'];
$id = $_GET['id'];

if (isset($_COOKIE["Identifica_user"])) {
    $altera_foto = "UPDATE usuarios SET imgPerfil = '$foto' WHERE ID = '$id'";
        $resultado_foto = mysqli_query($conn, $altera_foto);
        if (mysqli_affected_rows($conn)) {
            echo "<script>window.location = '../galeria?acao=sucess'</script>";
        } else {
            echo "<script>window.location = '../galeria?acao=erro'</script>";
        }
    } else {
        echo "<script>window.location = '../galeria?acao=erro'</script>";
    }


?>