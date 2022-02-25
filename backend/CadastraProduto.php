<?php
session_start();

require("../connection/conexao_msqli.php");

$produto = $_POST['produto'];
$preco = $_POST['preco'];

$sql = "INSERT INTO loja (produto, preco) VALUES ('$produto', '$preco')";

if (mysqli_query($conn, $sql)) {
      //$_SESSION['cadastroSucess'] = "Sucess";
      echo "<script>window.location = '$url_loja'</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      //echo "<script>alert('Falha ao salvar os dados!);</script>";
}
mysqli_close($conn);
?>