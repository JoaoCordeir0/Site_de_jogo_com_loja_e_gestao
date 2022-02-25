
<?php
require("../../connection/conexao_msqli.php");

$idgestao = $_GET['id'];
$produto = $_POST['produto'];
$cor = $_POST['cor'];
$preco = $_POST['preco'];
$qtd = $_POST['qtd'];
$status = $_POST['status'];
$desc = $_POST['desc'];

if (isset($_FILES['imgloja'])) {

  $pasta = "../../assets/img/imgLoja/";

  $tmp_name = $_FILES["imgloja"]["tmp_name"];
  $nome = $_FILES["imgloja"]["name"];

  $tamanho_imagem = $_FILES['imgloja']['size'];
  $tamanho = round($tamanho_imagem / 2048);

  $cod = date("dmYHis") . "-" . $_FILES["imgloja"]["name"];

  if ($tamanho < 2048) {
    $uploadfile = $pasta . basename($cod);

    if (move_uploaded_file($tmp_name, $uploadfile)) {
      $up = "UPDATE loja SET imgProduto = '$cod'  WHERE id = '$idgestao'";
      $resultado_usuario = mysqli_query($conn, $up);
    } 
  }
}

if (isset($produto)) {
  $up = "UPDATE loja SET produto = '$produto' WHERE id = '$idgestao'"; $resultado_usuario = mysqli_query($conn, $up);
}
if (isset($cor)) {
  $up = "UPDATE loja SET corProduto = '$cor' WHERE id = '$idgestao'"; $resultado_usuario = mysqli_query($conn, $up);
}
if (isset($desc)) {
  $up = "UPDATE loja SET descricao = '$desc' WHERE id = '$idgestao'"; $resultado_usuario = mysqli_query($conn, $up);
}
if (isset($preco)) {
  $up = "UPDATE loja SET preco = '$preco' WHERE id = '$idgestao'"; $resultado_usuario = mysqli_query($conn, $up);
}
if (isset($qtd)) {
  $up = "UPDATE loja SET qtdProduto = '$qtd' WHERE id = '$idgestao'"; $resultado_usuario = mysqli_query($conn, $up);
}
if (isset($status)) {
  $up = "UPDATE loja SET status = '$status' WHERE id = '$idgestao'"; $resultado_usuario = mysqli_query($conn, $up);
}

echo "<script>window.location = '../loja?acao=sucess'</script>";
?>