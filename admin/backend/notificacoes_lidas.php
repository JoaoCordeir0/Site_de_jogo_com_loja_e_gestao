<?php
session_start();

if (isset($_COOKIE["Identifica_user"])) {
    $var = $_GET['acao'];    
    $_SESSION['notification'] = $var;     
    if (isset($_SESSION['notification'])) {
        echo "<script>window.location = '../dash'</script>";
    }
} else {
    echo "<script>window.location = '../../index'</script>";
}
