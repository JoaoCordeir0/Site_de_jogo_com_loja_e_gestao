<?php
require("connection/conexao_msqli.php");

$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ip = $_SERVER['REMOTE_ADDR'];
$timezone = new DateTimeZone('America/Sao_Paulo');
$date = new DateTime('now', $timezone);
$newdate = $date->format('Y-m-d H:i:s');

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if ($url == 'http://cordeirovsk.com.br/index' || $url == 'http://cordeirovsk.com.br') {
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO acesso (data_acesso, pagina_acesso, host, ip) VALUES ('$newdate', 'Home', '$host', '$ip')";
    if (mysqli_query($conn, $sql)) {
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

if ($url == 'http://cordeirovsk.com.br/noticias') {
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO acesso (data_acesso, pagina_acesso, host, ip) VALUES ('$newdate', 'Noticias', '$host', '$ip')";
    if (mysqli_query($conn, $sql)) {
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

if ($url == 'http://cordeirovsk.com.br/loja') {
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO acesso (data_acesso, pagina_acesso, host, ip) VALUES ('$newdate', 'Loja', '$host', '$ip')";
    if (mysqli_query($conn, $sql)) {
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

if ($url == 'http://cordeirovsk.com.br/sobreJogo') {
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO acesso (data_acesso, pagina_acesso, host, ip) VALUES ('$newdate', 'Jogo', '$host', '$ip')";
    if (mysqli_query($conn, $sql)) {
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
