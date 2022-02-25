<?php include("include/rotas.php");?>

<?php
if (isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) :
    require("connection/conexao.php");

    $_SESSION['usuarioNome'];
    $_SESSION['idUsuario'];
    $id = $_SESSION['idUsuario'];
?>
<header id="topo">
            <nav class="navbar fixed-top navbar-expand-lg">
                <div class="container-fluid">
                    <a href="index"><img id="logo" src="assets/img/logo-branca-sem-fundo.png" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i style="color: white;" class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a id="menu" class="nav-link" href="<?= $url_noticias ?>">Noticias</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="menu" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Comunidade
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" target="_blank" href="<?= $url_comunidade ?>">Discord</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a id="menu" class="nav-link" href="<?= $url_loja ?>">Loja</a>
                            </li>
                            <li class="nav-item">
                                <a id="menu" class="nav-link" href="<?= $url_jogo ?>">Sobre o jogo</a>
                            </li>
                            <li class="nav-item">
                                <a id="menu" class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contato">Contato</a>
                            </li>
                        </ul>

                        <span class="js-theme"> <span id="temadesk"><i style="color:white; margin-right:5px;" class="fas fa-adjust me-4 ms-4"></i></span> <span id="tema">Trocar o tema</span> </span>
                        <script src="assets/css/tema.js"></script>

                        <form class="d-flex">
                            <a class="menulink" href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i style="color: white;" class="fas fa-search me-4 search"></i></a>
                            <a class="menulink" href="" onmouseover="showMessage()"><i style="color: white;" class="fas fa-shopping-cart me-4 car"></i></a>
                        </form>

                        <p id="pesquisar" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesquisar</p> <br>
                        <p id="carrinho" data-bs-toggle="modal" data-bs-target="#compras">Carrinho de compras</p>

                        <div class="btn-group username">
                            <button id="usuario" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <span style="color: white;">
                                    <?php 
                                        echo $lista['nome'];                                        
                                    ?>
                                </span>
                                <i style="color:white;" class="fas fa-user-circle mt-1 me-1 ms-1"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                <li><a id="logout" href="#" data-bs-toggle="modal" data-bs-target="#editaPerfil"><i class="fas fa-user-edit"></i> Editar perfil</a></li>
                                <li><a id="logout" href="backend/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
<?php endif?>

<?php if (!isset($_SESSION["usuario"])) :?>
    <header id="topo">
            <nav class="navbar fixed-top navbar-expand-lg">
                <div class="container-fluid">
                    <a href="index"><img id="logo" src="assets/img/logo-branca-sem-fundo.png" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i style="color: white;" class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a id="menu" class="nav-link" href="<?= $url_noticias ?>">Noticias</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="menu" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Comunidade
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" target="_blank" href="<?= $url_comunidade ?>">Discord</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a id="menu" class="nav-link" href="<?= $url_loja ?>">Loja</a>
                            </li>
                            <li class="nav-item">
                                <a id="menu" class="nav-link" href="<?= $url_jogo ?>">Sobre o jogo</a>
                            </li>
                            <li class="nav-item">
                                <a id="menu" class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contato">Contato</a>
                            </li>
                        </ul>

                        <span class="js-theme"> <span id="temadesk"><i style="color:white; margin-right:5px;" class="fas fa-adjust me-4 ms-4"></i></span> <span id="tema">Trocar o tema</span> </span>
                        <script src="assets/css/tema.js"></script>

                        <div id="AcessoMobile">
                            <a id="entrar" href="acoes/login">ENTRAR</a>
                            <a id="entrar" href="acoes/login">/</a>
                            <a id="inscrevase" href="acoes/cadastro">REGISTRAR</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
<?php endif?>