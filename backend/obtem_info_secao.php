<?php
//monitora site
require("backend/coleta_dados.php");
//end

$_SESSION["usuario"];
require("connection/conexao.php");

$_SESSION['usuarioNome'];
$_SESSION['idUsuario'];
$id = $_SESSION['idUsuario'];

$listagem = $conexao->prepare("SELECT * FROM usuarios WHERE ID = '$id'");
$listagem->execute();

$lista = $listagem->fetch(PDO::FETCH_ASSOC)
?>
