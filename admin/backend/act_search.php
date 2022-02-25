<?php
require("../../connection/conexao.php");

$busca = $_POST['search'];

if($busca == 'gestores' || $busca == 'user' || $busca == 'loja' || $busca == 'dash' || $busca == 'acesso' || $busca == 'email'){
    echo "<script>window.location = 'http://cordeirovsk.com.br/admin/".$busca."'</script>";
} 
else{ 
    header('Location: http://cordeirovsk.com.br/admin/dash?search=false');
}
?>