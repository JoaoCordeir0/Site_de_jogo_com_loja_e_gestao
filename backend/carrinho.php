<?php

require("../connection/conexao_msqli.php");

session_start();

$id = $_GET['id'];  

    if(isset($id)){
        $result_usuarios = "UPDATE loja SET status = 2 WHERE id = '$id'";
        $resultado_usuario = mysqli_query($conn, $result_usuarios);
        if(mysqli_affected_rows($conn)){            
            echo "<script>window.location = '../loja'</script>";
        }else{    
            echo "<script>window.location = '../loja'</script>";
        }
    }else{	       
        echo "<script>window.location = '../loja'</script>";
    }    
?>
