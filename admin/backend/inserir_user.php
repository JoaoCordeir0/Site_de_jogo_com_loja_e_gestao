<?php
require("../../connection/conexao_msqli.php");

$msgseguranca = 'Este site possui segurança de ponta a ponta';

$email = $_POST['email'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$user = $_POST['user'];
$senha = $_POST['senha'];
$acesso = $_POST['acesso'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_COOKIE["Identifica_user"])) {
    if (isset($email) && isset($nome) && isset($idade) && isset($user) && isset($senha) && isset($acesso)) {
        $sql = "INSERT INTO usuarios (email, nome, idade, user, senha, acesso, imgPerfil) VALUES ('$email', '$nome', '$idade', '$user', '$senha', '$acesso', 'default.png')";

        if (mysqli_query($conn, $sql)) {
            if ($acesso == 2) {
                echo "<script>window.location = '../gestores?acao=sucess'</script>";
            }
            if ($acesso != 2) {
                echo "<script>window.location = '../user?acao=sucess'</script>";
            }
        } else {
            if ($acesso == 2) {
                echo "<script>window.location = '../gestores?acao=error'</script>";
            }
            if ($acesso != 2) {
                echo "<script>window.location = '../user?acao=error'</script>";
            }
        }
        mysqli_close($conn);
    } else {
        echo "
        <script type='text/javascript'>              
            alert('$msgseguranca')
        </script>";
        echo "<script>window.location = '../../index'</script>";
    }
} else {
    echo "
    <script type='text/javascript'>              
        alert('$msgseguranca')
    </script>";
    echo "<script>window.location = '../../index'</script>";
}
