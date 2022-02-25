<?php
require("../../connection/conexao.php");

$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ip = $_SERVER['REMOTE_ADDR'];
$timezone = new DateTimeZone('America/Sao_Paulo');
$date = new DateTime('now', $timezone);
$newdate = $date->format('Y-m-d H:i:s');

$user = $_POST['user'];
$senha = $_POST['senha'];

if (isset($_POST["user"]) && isset($_POST["senha"]) && $conexao != null) {
    $query = $conexao->prepare("SELECT * FROM usuarios WHERE user = ? AND senha = ? AND acesso = 2 ");
    $query->execute(array($user, $senha));

    if ($query->rowCount()) {
        $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];        

        session_start();
        $_SESSION["adm"] = array($user["user"]);
        $_SESSION['usuarioNome'] = $user['nome'];
        $_SESSION['idUsuario'] = $user['ID'];    
        $userSessao = $user['nome'];
       
        //require("../../backend/notifica_acesso_gestao.php");
        
        require("../../connection/conexao_msqli.php");
        $sql = "INSERT INTO acesso (data_acesso, pagina_acesso, host, ip, user, login_gestao) VALUES ('$newdate', 'gestao', '$host', '$ip', '$userSessao', 'X')";
        if (mysqli_query($conn, $sql)) {
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);

        echo "<script>window.location = '../dash?acao=logado'</script>";        
        
    } else {        
        echo "<script>window.location = '../index?acao=erro'</script>";
    }
} else {
    echo "<script>window.location = '../index?acao=erro'</script>";
}
?>