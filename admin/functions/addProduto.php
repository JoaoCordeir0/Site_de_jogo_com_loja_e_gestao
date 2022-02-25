<?php include("valida_dados_secao.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

	<?php include("../include/head.php") ?>

	<title><?php echo $gestao;
			echo 'ADD Produto'; ?></title>

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
			<div class="container" style="margin-top: -50px;">
				<form action="../backend/inserir_produto.php" method="POST" enctype="multipart/form-data">
					<table class="exibeTable edit">
						<td colspan="2" style="text-align:center;">
							<img src="../../assets/img/add-produtos.jpg" alt="">
						</td>
						<tr>
							<td colspan="2" style="text-align:center;">
								<input type="file" id="upload" name="imgloja" accept="image/*">
							</td>
						</tr>
						<tr>
							<td>Produto:</td>
							<td><input required name="produto" type="text"></td>
						</tr>
						<tr>
							<td>Cor:</td>
							<td><input name="cor" type="text"></td>
						</tr>
						<tr>
							<td>Descricao:</td>
							<td><input name="desc" type="text" maxlength="50"></td>
						</tr>
						<tr>
							<td>Pre&ccedil;o:</td>
							<td><input required name="preco" type="text"></td>
						</tr>
						<tr>
							<td>Qtd:</td>
							<td><input required name="qtd" type="text"></td>
						</tr>
						<tr>
							<td>Status:</td>
							<td><input required name="status" type="number"></td>
						</tr>
						<tr>
							<td colspan="2"><button style="float: right;" type="submit" class="btn btn-success">Inserir</button></td>
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
</body>

</html>