<?php session_start(); ?>
<?php include("manual.php"); ?>
<?php include("search.php"); ?>
<?php
$ip = $_SERVER['REMOTE_ADDR'];

$cont = 0;
$notificacoes_lista = $conexao->prepare("SELECT * FROM acesso WHERE data_acesso >= NOW() - INTERVAL 1 DAY AND ip != '$ip'");
$notificacoes_lista->execute();

while ($notificacoes = $notificacoes_lista->fetch(PDO::FETCH_ASSOC)) {
    $cont++;
}
?>

<nav class="navbar navbar-light bg-light ">
    <div class="container-fluid">
        <a class="navbar-brand" style="color:white;">Navbar</a>
        <div class="relogio"><i class='bx bxs-watch'></i>
            <div id="demo"></div>
        </div>
        <form class="d-flex">
            <div id="icons">
                <a href="" data-bs-toggle="modal" data-bs-target="#search"><i class="fas fa-search"></i></a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#manual"><i class="fas fa-book-open"></i></a>
                <a href="" onmouseover="showMessage()"><i class="fas fa-bell"></i></a>

                <?php
                if ($_SESSION['notification'] != 1) :
                    if ($cont > 0) : ?>
                        <div class="notificacao">
                            <p><?php echo $cont; ?></p>
                        </div>
                    <?php endif ?>
                <?php endif ?>

            </div>
            <div class="dropdown">
                <button style="background-color:#11101d; color:white;" class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img style="max-width:35px; margin:-5px 10px -5px -10px;" src="../../assets/img/imgperfil/<?php echo $user['imgPerfil']?>" alt="">
                    <?php echo $user['nome']; ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="../functions/edita_user?id=<?php echo $id ?>">Editar perfil</a></li>
                    <li><a class="dropdown-item" href="../../backend/logout">Logout</a></li>
                </ul>
            </div>
        </form>
    </div>
</nav>
