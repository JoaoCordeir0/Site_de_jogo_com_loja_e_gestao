
<?php
require("../../connection/conexao_msqli.php");

$idgestao  = $_GET['id'];
$email     = $_POST['email'];
$user      = $_POST['user'];
$name      = $_POST['nome'];
$acesso    = $_POST['acesso'];
$idadeUser = $_POST['idade'];
$senha     = $_POST['senha'];

if(isset($_FILES['imgperfil'])) {
		
	$pasta = "../../assets/img/imgperfil/";
	
	$tmp_name = $_FILES["imgperfil"]["tmp_name"];
	$nome = $_FILES["imgperfil"]["name"];
	
	$tamanho_imagem = $_FILES['imgperfil']['size'];
	$tamanho = round($tamanho_imagem / 2048);
	
	$cod = date("dmYHis") . "-" . $_FILES["imgperfil"]["name"];
	
	if($tamanho < 2048){
		$uploadfile = $pasta . basename($cod);

		if(move_uploaded_file($tmp_name, $uploadfile)){		
			$up = "UPDATE usuarios SET imgPerfil = '$cod'  WHERE ID = '$idgestao'";	$resultado_usuario = mysqli_query($conn, $up);	
		}
	}	
}

if (isset($email)) { 
	$up = "UPDATE usuarios SET email 	 = '$email' 	WHERE ID = '$idgestao'";	$resultado_usuario = mysqli_query($conn, $up);	
}
if (isset($name)) {
	$up = "UPDATE usuarios SET nome 	 = '$name'      WHERE ID = '$idgestao'";	$resultado_usuario = mysqli_query($conn, $up);	
}
if (isset($user)) {
	$up = "UPDATE usuarios SET user      = '$user'      WHERE ID = '$idgestao'";	$resultado_usuario = mysqli_query($conn, $up);	
} 
if (isset($idadeUser)) {
	$up = "UPDATE usuarios SET idade     = '$idadeUser' WHERE ID = '$idgestao'";	$resultado_usuario = mysqli_query($conn, $up);	
}
if (isset($acesso)) {
	$up = "UPDATE usuarios SET acesso    = '$acesso'    WHERE ID = '$idgestao'";	$resultado_usuario = mysqli_query($conn, $up);	
}
if (isset($senha)) {
	$up = "UPDATE usuarios SET senha     = '$senha'     WHERE ID = '$idgestao'";	$resultado_usuario = mysqli_query($conn, $up);
}
	if($acesso == 2){
		echo "<script>window.location = '../gestores?acao=sucess'</script>";
	}else if($acesso != 2){
		echo "<script>window.location = '../user?acao=sucess'</script>";
	}
?>

