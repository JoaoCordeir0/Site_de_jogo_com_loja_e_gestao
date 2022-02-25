<?php include("valida_dados_secao.php");

$idgestao = $_GET['id'];

$listagem = $conexao->prepare("SELECT * FROM loja WHERE id = '$idgestao'");
$listagem->execute();

$array = $listagem->fetch(PDO::FETCH_ASSOC)

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <?php include("../include/head.php") ?>

  <title><?php echo $gestao;
          echo 'Edita loja'; ?></title>

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
        <form action="../backend/edita_Loja.php?id=<?php echo $idgestao ?>" method="POST">
          <table class="exibeTable edit">
            <tr colspan="2">
              <td colspan="2" style="text-align:center;"> <img style="max-width:300px;" src="../../assets/img/imgLoja/<?php echo $array['imgProduto']; ?>" alt=""></td>
            </tr>
            <tr>
              <td colspan="2" style="text-align:center;">
                <input type="file" id="upload" name="imgloja" accept="image/*">
              </td>
            </tr>
            <tr>
              <td>Produto:</td>
              <td><input value="<?php echo $array['produto']; ?>" name="produto" type="text"></td>
            </tr>
            <tr>
              <td>Cor:</td>
              <td><input value="<?php echo $array['corProduto']; ?>" name="cor" type="text"></td>
            </tr>
            <tr>
              <td>Descricao:</td>
              <td><input value="<?php echo $array['descricao']; ?>" maxlength="50" name="desc" type="text"></td>
            </tr>
            <tr>
              <td>Pre&ccedil;o em R$:</td>
              <td><input value="<?php echo $array['preco']; ?>" name="preco" type="text"></td>
            </tr>
            <tr>
              <td>Quantidade:</td>
              <td><input value="<?php echo $array['qtdProduto']; ?>" name="qtd" type="text"></td>
            </tr>
            <tr>
              <td>Status:</td>
              <td><input value="<?php echo $array['status']; ?>" name="status" type="number"></td>
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
      if (data.size > 1048576) {
        alert('Tamanho da imagem excede 1MB'); //Acima do limite
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