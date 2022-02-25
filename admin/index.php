<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <?php include("include/head.php") ?>

    <title><?php echo $gestao;
            echo 'Login'; ?></title>

    <link rel="stylesheet" href="../assets/css/gestao.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Readex+Pro:wght@500&display=swap');

        body {
            background-color: #fbfdfe;
            overflow-x: hidden !important;
            overflow-y: hidden !important;
        }
    </style>

</head>

<body>
    <!-- inicio do preloader -->
    <div id="preloader">
        <div class="inner">
            <img src="../assets/img/carregamento_gestao.gif" alt="">
        </div>
    </div>
    <!-- fim do preloader -->

    <div class="container-fluid">
        <div class="form" style="margin-bottom:20px;">
            <div id="header_login">
                <h2>GEST&Atilde;O</h2>
            </div>

            <?php if (isset($_SESSION['loginErro'])) : ?>
                <p class="text-center alert alert-danger" id="mensagem_erro_login">
                    <?php
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                    ?>
                </p>
            <?php endif ?>

            <form name="formulario" method="POST" action="backend/login_gestao.php" id="form-login">
                <i class="fas fa-user-tie"></i> <input type="text" placeholder="Usu&#xE1;rio" required="" id="user" name="user" maxlength="20"> <br>
                <i class="fas fa-lock"></i> <input type="password" placeholder="Senha" required="" id="senha" name="senha" maxlength="12">

                <div class="g-recaptcha" data-sitekey="6LeUqascAAAAAMaDudRAhfjKzQu5aLMHJSxlQJka"></div>

                <button class="btn btn-light d-flex justify-content-center" type="submit" onclick="return validaLogin()">Entrar</button>

                <script src="js/validaLogin.js"></script>
            </form>
        </div>
        <?php include("include/footer.php"); ?>
    </div>

</body>

<script src="js/relogio.js"></script>
<script src="../assets/js/sweetalert.js"></script>
<script src="../assets/js/preloader.js"></script>
<script language="javascript">
    var url_atual = window.location.href;
    var new_url = url_atual.slice(url_atual.length - 10);

    if (new_url == "?acao=erro") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Usuário ou senha incorretos, tente novamente',
        })
    }
</script>

</html>