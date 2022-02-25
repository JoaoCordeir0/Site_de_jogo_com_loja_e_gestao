<?php
require("../connection/conexao.php");

$t_home = 0;
$t_noticias = 0;
$t_loja = 0;
$t_sobrejogo = 0;
$t_gestao = 0;
$t_site = 0;
$total  = 0;

$lista_home = $conexao->prepare("SELECT * FROM acesso WHERE pagina_acesso = 'home'");
$lista_home->execute();

while ($home = $lista_home->fetch(PDO::FETCH_ASSOC)){
    $t_home++;
}

$lista_noticias = $conexao->prepare("SELECT * FROM acesso WHERE pagina_acesso = 'noticias'");
$lista_noticias->execute();

while ($noticias = $lista_noticias->fetch(PDO::FETCH_ASSOC)){
    $t_noticias++;
}

$lista_loja = $conexao->prepare("SELECT * FROM acesso WHERE pagina_acesso = 'loja'");
$lista_loja->execute();

while ($loja = $lista_loja->fetch(PDO::FETCH_ASSOC)){
    $t_loja++;
}

$lista_sobrejogo = $conexao->prepare("SELECT * FROM acesso WHERE pagina_acesso = 'jogo'");
$lista_sobrejogo->execute();

while ($sobrejogo = $lista_sobrejogo->fetch(PDO::FETCH_ASSOC)){
    $t_sobrejogo++;
}

$lista_gestao = $conexao->prepare("SELECT * FROM acesso WHERE pagina_acesso = 'gestao'");
$lista_gestao->execute();

while ($gestao = $lista_gestao->fetch(PDO::FETCH_ASSOC)){
    $t_gestao++;
}

$lista_site = $conexao->prepare("SELECT * FROM acesso WHERE pagina_acesso = 'site'");
$lista_site->execute();

while ($site = $lista_site->fetch(PDO::FETCH_ASSOC)){
    $t_site++;
}

$total = $t_home + $t_loja + $t_noticias + $t_site + $t_sobrejogo + $t_gestao;
?>