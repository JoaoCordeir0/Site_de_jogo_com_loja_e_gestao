//<?php
//    //session_start();
//    
//    $server = "";
//    $usuario = "";
//    $senha = "";
//    $banco = "";
//
//    try{
//        $conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
//        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    }catch(PDOException $erro){
//        echo "Conex&atilde;o falhou : {$erro->getMessage()}";
//        $conexao = null;
//    }
//?>

<!--connection localhost-->

<?php
    //session_start();
    
    $server = "127.0.0.1";
    $usuario = "root@localhost";
    $senha = "";
    $banco = "3967906_cordeiro";

    try{
        $conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){
        echo "Conex&atilde;o falhou : {$erro->getMessage()}";
        $conexao = null;
    }
?>
