<?php

include("http://cordeirovsk.com.br/rotas");

session_start();

require("../connection/conexao_msqli.php");

$result_usuarios = "SELECT ID, produto FROM loja";

$apaga = $_POST['produto'];

if(empty($id)){
	$result_usuarios = "DELETE FROM loja WHERE produto = '$apaga'";
	$resultado_usuario = mysqli_query($conn, $result_usuarios);
	if(mysqli_affected_rows($conn)){
		echo "<script>window.location = '$url_loja'</script>";
	}else{
		echo "<script>window.location = '$url_loja'</script>";
	}
}else{	
	echo "<script>window.location = '$url_loja'</script>";
}
