<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include("../include/head.php") ?>

    <title><?php echo $viewpage;
            echo ' Cadastro' ?></title>

    <!--CSS-->
    <link rel="stylesheet" href="../assets/css/cadastro.css">
    <link rel="stylesheet" href="../assets/css/preloader.css">
    <!--END-->

    <script src="../assets/js/modal.js"></script>
</head>

<body>

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

    <div>
        <main class="container">
            <div id="header_login">
                <a href="../index.php"><img id="logo_user" src="../assets/img/logo-branca-sem-fundo.png"></a>
                <h2>Cadastro</h2>
            </div>

            <?php if (isset($_SESSION['email_existe'])) : ?>
                <p class="text-center alert alert-danger" style="font-size:15pt; width:100%; top:0; left:0; position:fixed; text-align:center;">
                    <?php
                    echo $_SESSION['email_existe'];
                    unset($_SESSION['email_existe']);
                    ?>
                </p>
            <?php endif ?>

            <form name="formulario" action="../backend/cadastro.php" method="POST" autocomplete="off">
                <div class="input-field">
                    <i class="fas fa-user-tie"></i><input required type="text" name="nome" maxlength="40" placeholder="Digite seu nome" autocomplete="off">
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <i class="fas fa-user-tie"></i><input onchange="validardataDeNascimento(this.value);" required type="date" min="1950-01-01" max="2005-11-18" name="idade" maxlength="40" autocomplete="off">
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <i class="fas fa-user-tie"></i><input required type="text" name="email" minlength="11" maxlength="50" placeholder="Digite seu e-mail" autocomplete="off">
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i><input required type="text" name="user" maxlength="20" placeholder="Usu&aacute;rio" autocomplete="off">
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i><input required type="password" minlength="6" name="senha" maxlength="12" placeholder="Senha" id="senha1"><i id="olho1" class="fas fa-eye-slash small"></i>
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i><input required type="password" minlength="6" name="confirmaSenha" maxlength="12" placeholder="Confirme sua senha" id="senha2"><i id="olho2" class="fas fa-eye-slash small"></i>
                    <div class="underline"></div>
                </div>

                <!-- Button trigger modal -->
                <div style="display:inline;"><input id="termos" name="checkboxterms" type="checkbox" required> Aceita os <a style="color:white;" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">termos</a></div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="color:black">Termos do cadastro</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div style="color:black;" class="modal-body">
                                Ao se cadastrar, voc&#x000EA; devera esperar que um administrador ative seu cadastro, depois disso seu acesso ser&aacute; liberado.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="g-recaptcha" data-sitekey="6LeUqascAAAAAMaDudRAhfjKzQu5aLMHJSxlQJka"></div>

                <input type="submit" value="Confirmar" name="entrar" onclick="return validarCadastro()">

                <div id="EsqueceuSenha">
                    <a href="login">J&atilde; possui conta? <u>Fa&ccedil;a login</u></a>
                </div>
                <script src="../assets/js/validaCadastro.js"></script>

            </form>
        </main>

        <div style="clear: both;"></div>
    </div>

    <script src="../assets/js/versenha.js"></script>
    <script src="../assets/js/preloader.js"></script>
</body>

</html>