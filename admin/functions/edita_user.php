<?php include("valida_dados_secao.php");

$idgestao = $_GET['id'];

$listagem = $conexao->prepare("SELECT * FROM usuarios WHERE id = '$idgestao'");
$listagem->execute();

$array = $listagem->fetch(PDO::FETCH_ASSOC)

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

	<?php include("../include/head.php") ?>

	<title><?php echo $gestao;
			echo 'Edita usuário'; ?></title>

	<link rel="stylesheet" href="../../assets/css/gestao.css">
</head>

<body>

	<!-- inicio do preloader -->
	<div id="preloader">
		<div class="inner">
			<img src="../../assets/img/carregamento_gestao.gif" alt="">
		</div>
	</div>
	<script src="../../assets/js/preloader.js"></script>
	<!-- fim do preloader -->

	<?php include("../include/menu_superior2.php"); ?>
	<?php include("../include/menu2.php"); ?>

	<section class="home-section">
		<div class="home-content">
			<i class='bx bx-menu'></i>
			<div class="container" style="margin-top: -20px;">
				<form action="../backend/edita_Perfil.php?id=<?php echo $idgestao ?>" method="POST" enctype="multipart/form-data">
					<table class="exibeTable edit">
						<tr>
							<td colspan="2" style="text-align:center;">
								<img style="max-width:200px; max-height:200px; border-radius:400px;" src="../../assets/img/imgperfil/<?php echo $array['imgPerfil'] ?>" />
							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;">
								<input type="file" id="upload" name="imgperfil" accept="image/*">
							</td>
						</tr>
						<tr>
							<td>ID:</td>
							<td><label><?php echo $array['ID']; ?></label></td>
						</tr>
						<tr>
							<td>Nome:</td>
							<td><input name="nome" type="text" value="<?php echo $array['nome']; ?>"></td>
						</tr>
						<tr>
							<td>Idade:</td>
							<td><input name="idade" type="text" value="<?php echo $array['idade']; ?>"></td>
						</tr>
						<tr>
							<td>E-mail:</td>
							<td><input name="email" type="text" value="<?php echo $array['email']; ?>"></td>
						</tr>
						<tr>
							<td>Acesso:</td>
							<td><input name="acesso" type="text" value="<?php echo $array['acesso']; ?>"></td>
						</tr>
						<tr>
							<td>User:</td>
							<td><input name="user" type="text" value="<?php echo $array['user']; ?>"></td>
						</tr>
						<tr>
							<td>Senha:</td>
							<td><input name="senha" type="password" value="<?php echo $array['senha']; ?>"></td>
						</tr>
						<tr>
							<td colspan="2"><button id="Salvar" style="float: right;" type="submit" class="btn btn-primary">Salvar</button> <span id="Salvando" style="display: none; float:right;">Salvando... <img style="width:30px; margin-top:-7px;" src="../../assets/img/salvando.gif" alt=""></span></td>
           				</tr>
					</table>

				</form>
				<?php include("../include/notificacoes.php"); ?>
				<?php include("../include/footer.php"); ?>
			</div>
		</div>
	</section>

	<script src="../js/menu.js"></script>
	<script src="../js/relogio.js"></script>
	<script src="../js/notificacoes.js"></script>
	<script>
    //Desabilita o botao ao enviar o formulario
    //Evita o duplo envio
	//Mostra ação salvando para o usuario
    $(document).ready(function () {
        $("#Salvar").click(function () {
            $("#Salvar").css("display", "none");
            $("#Salvando").css("display", "block");
        });   
      });   
  </script>
	<script>
		$('#upload').bind('change', function(e) {
			var data = e.originalEvent.target.files[0];
			// Exibe o tamanho no console
			console.log("tamanho da imagem = " + data.size);
			// Ou faz a validação
			if (data.size > 2097152) {
				alert('Tamanho da imagem excede 2MB'); //Acima do limite
				upload.value = ""; //Limpa o campo     
			}
			
			var ext = $('#upload').val().split('.').pop().toLowerCase();

			if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
				alert('Extensão de arquivo não permitido');
				upload.value = ""; //Limpa o campo   
			}
		});
	</script>

</body>

</html>