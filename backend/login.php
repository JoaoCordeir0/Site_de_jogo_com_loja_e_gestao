<?php
require("../connection/conexao.php");

$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ip = $_SERVER['REMOTE_ADDR'];
$timezone = new DateTimeZone('America/Sao_Paulo');
$date = new DateTime('now', $timezone);
$newdate = $date->format('Y-m-d H:i:s');

$user = $_POST['user'];
$senha = $_POST['senha'];

if (isset($_POST["user"]) && isset($_POST["senha"]) && $conexao != null) {
    $query = $conexao->prepare("SELECT * FROM usuarios WHERE user = ? AND senha = ? AND acesso >= 1"); //add segurança AND acesso = 1
    $query->execute(array($user, $senha));

    if ($query->rowCount()) {
        $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

        session_start();
        $_SESSION["usuario"] = array($user["user"]);
        $_SESSION['usuarioNome'] = $user['nome'];
        $_SESSION['idUsuario'] = $user['ID'];                
        $userSessao = $user['nome'];

        require("../connection/conexao_msqli.php");
        $sql = "INSERT INTO acesso (data_acesso, pagina_acesso, host, ip, user, login_site) VALUES ('$newdate', 'site', '$host', '$ip', '$userSessao', 'X')";
        if (mysqli_query($conn, $sql)) {
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
       
        echo "<script>window.location = '../index'</script>";
        
    } else {
        session_start();
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        echo "<script>window.location = '../acoes/login'</script>";
    }
} else {
    session_start();
    $_SESSION['loginErro'] = "Usuário ou senha Inválido";
    echo "<script>window.location = '../acoes/login'</script>";
}
?>