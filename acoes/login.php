<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include("../include/head.php") ?>

    <title><?php echo $viewpage;
            echo ' Login' ?></title>

    <!--CSS-->
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/preloader.css">
    <!--END-->
</head>

<body>
    <div>
        <!-- inicio do preloader -->
        <div id="preloader">
            <div class="inner">
                <div class="bolas">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- fim do preloader -->

        <main class="container">
            <?php if (isset($_SESSION['EmailSucess'])) : ?>
                <p class="text-center alert alert-success" style="font-size:15pt; width:100%; top:0; left:0; position:fixed; text-align:center;">
                    <?php
                    echo $_SESSION['EmailSucess'];
                    unset($_SESSION['EmailSucess']);
                    ?>
                </p>
            <?php endif ?>

            <?php if (isset($_SESSION['EmailErro'])) : ?>
                <p class="text-center alert alert-danger" style="font-size:15pt; width:100%; top:0; left:0; position:fixed; text-align:center;">
                    <?php
                    echo $_SESSION['EmailErro'];
                    unset($_SESSION['EmailErro']);
                    ?>
                </p>
            <?php endif ?>

            <div id="header_login">
                <a href="../index.php"><img id="logo_user" src="../assets/img/logo-branca-sem-fundo.png"></a>
                <h2>Login</h2>
            </div>

            <?php if (isset($_SESSION['loginErro'])) : ?>
                <p class="text-center alert alert-danger">
                    <?php
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                    ?>
                </p>
            <?php endif ?>

            <form name="formulario" action="../backend/login.php" method="POST" id="form-login">
                <div class="input-field">
                    <i class="fas fa-user"></i><input required type="text" name="user" maxlength="50" placeholder="Usu&aacute;rio" autocomplete="off" id="user">
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i><input required type="password" name="senha" minlength="6" maxlength="12" placeholder="Senha" id="senha"><i id="olho" class="fas fa-eye-slash small"></i>
                    <div class="underline"></div>
                </div>

                <script src="../assets/js/versenha.js"></script>

                <input type="submit" value="Entrar" name="entrar">

                <script src="../assets/js/validaLogin.js"></script>

                <div id="EsqueceuSenha">
                    <a href="" data-bs-toggle="modal" data-bs-target="#esqueceuSenha">Esqueceu a senha?</a>
                </div>
                <div id="EsqueceuSenha">
                    <a href="cadastro">Não possui conta? <u>Increva-se</u></a>
                </div>
            </form>

            <div class="modal fade" id="esqueceuSenha">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="color:black;">Recuperar senha</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../backend/envia_email.php" method="POST">
                                <div style="color:black;" class="mb-3">
                                    <input placeholder="Digite seu email" class="form-control" required type="email" name="email" minlength="11" maxlength="50"> <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="submit" name="ok" class="btn btn-primary index">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <script src="../assets/js/preloader.js"></script>
        <script src="../assets/js/sweetalert.js"></script>
        <script type="text/javascript" language="javascript">
            var url_atual = window.location.href; 
            if (url_atual == "http://cordeirovsk.com.br/acoes/login?acao=success") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: 'Cadastro efetuado, faça login'
                })
            }
        </script>
    </div>
</body>

</html>