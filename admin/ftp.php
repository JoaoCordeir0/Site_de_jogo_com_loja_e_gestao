<?php

$dados = array(
    "host" => "f32-preview.awardspace.net",
    "usuario" => "3967906_Cordeiro",
    "senha" => "vsk@dm2134"
);

$fconn = ftp_connect($dados["host"]);

ftp_login($fconn, $dados["usuario"], $dados["senha"]);

$lista = ftp_rawlist($fconn, "/");
foreach ($lista as $item) {
    echo $item . "<br />";
}

ftp_close($fconn);
?>