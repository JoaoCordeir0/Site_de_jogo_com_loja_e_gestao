<?php
require("../connection/conexao_msqli.php");

$msgseguranca = 'O site possui segurança de ponta a ponta';
$user = $_POST['user'];
$idade = $_POST['idade'];
$senha_user = $_POST['senha'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$ip = $_SERVER['REMOTE_ADDR'];
$timezone = new DateTimeZone('America/Sao_Paulo'); $date = new DateTime('now', $timezone); $newdate = $date->format('d/m/Y H:i');

if (isset($user) && isset($idade) && isset($senha_user) && isset($nome) && isset($email)) {
      require("../connection/conexao.php");
            $valida_email = $conexao->prepare("SELECT * FROM usuarios WHERE email = '$email'");
                  $valida_email->execute();
                        $lista_email = $valida_email->fetch(PDO::FETCH_ASSOC);

                        if($lista_email['email'] != $email){
                              if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                              } else {
                                    $sql = "INSERT INTO usuarios (user, senha, nome, email, idade, dataCadastro, acesso, ip_user, imgPerfil) VALUES ('$user', '$senha_user', '$nome', '$email', '$idade', '$newdate', 1, '$ip', 'default.png')";
                                    if (mysqli_query($conn, $sql)) {
                                          echo "<script>window.location = '../acoes/login?acao=success'</script>";
                                    } else {
                                          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                    }
                                    mysqli_close($conn);
                              }
                        }else{
                              session_start();
                              $_SESSION['email_existe'] = "Este e-mail já está cadastrado. Recupere sua senha na tela de <a href='../acoes/login'>login</a>";
                              echo "<script>window.location = '../acoes/cadastro'</script>";
                        }                        
                  }else {
                        echo "
                        <script type='text/javascript'>              
                        alert('$msgseguranca')
                        </script>";
                        echo "<script>window.location = '../index'</script>";
                  }
?>

<!--Se estiver usando CloudFlare:
$_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];

Se estiver usando Incapsula:
$_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_INCAP_CLIENT_IP'];

Se estiver usando o Sucuri:
$_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_X_SUCURI_CLIENTIP'];-->