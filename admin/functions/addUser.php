<?php include("valida_dados_secao.php");?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <?php include("../include/head.php") ?>

    <title><?php echo $gestao; echo 'ADD Usuário'; ?></title>

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
			<div class="container" style="margin-top: -100px;">
				<form action="../backend/inserir_user.php" method="POST">
					<table class="exibeTable edit">
						<tr>
							<td colspan="2" style="text-align:center;"><img src="../../assets/img/default.png" alt=""></td>
						</tr>						
						<tr>
							<td>Nome:</td>
							<td><input required name="nome" type="text"></td>
						</tr>
						<tr>
							<td>Idade:</td>
							<td><input required name="idade" type="date"></td>
						</tr>
						<tr>
							<td>E-mail:</td>
							<td><input required name="email" type="text"></td>
						</tr>
						<tr>
							<td>Acesso:</td>
							<td><input required name="acesso" type="text"></td>
						</tr>
						<tr>
							<td>User:</td>
							<td><input required name="user" type="text"></td>
						</tr>
						<tr>
							<td>Senha:</td>
							<td><input required name="senha" type="password"></td>
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