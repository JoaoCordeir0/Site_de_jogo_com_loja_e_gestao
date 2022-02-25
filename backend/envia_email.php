<?php

require_once('vendor/autoload.php');
require_once('../connection/conexao.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$destinatario = $_POST['email'];
$tema_email = 'Recuperar senha';
$timezone = new DateTimeZone('America/Sao_Paulo');
$date = new DateTime('now', $timezone);
$newdate = $date->format('d/m/Y H:i');

$lista_info = $conexao->prepare("SELECT * FROM usuarios WHERE email = '$destinatario'");
$lista_info->execute();

$info_user = $lista_info->fetch(PDO::FETCH_ASSOC);

if (!$info_user['email'] != $destinatario) {

    $mail = new PHPMailer(true); //Habilitar o disparo de exception;

    try {
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP(); //Para enviar via fun��o nativa do php, utiliza o $mail->isMail();

        //configs para se autenticar no SMTP;

        $mail->Host       = "free.mboxhosting.com";
        $mail->SMTPAuth   = true;
        $mail->Username   = 'webmaster@cordeirovsk.com.br';
        $mail->Password   = 'webcordeir0';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 25;

        //Info do remetente;
        $mail->setFrom('webmaster@cordeirovsk.com.br', 'Cordeirovsk.com.br');
        $mail->addReplyTo('webmaster@cordeirovsk.com.br', 'Cordeirovsk.com.br');

        //Info do destinatario;

        $mail->addAddress($destinatario);

        //configs do email;

        $mail->isHTML(true); //Corpo da mensagem em HTML;
        $mail->Subject = utf8_decode($tema_email);
        $mail->Body =
            utf8_decode("
                        <br> 
                        <strong>Obrigado por utilizar o site</strong> <br> <br>
                        <span style='color:black'>Seu usuario de acesso:<strong>" . $info_user["user"] . "</strong><br><br>
                        Sua senha de acesso:<strong>" . $info_user['senha'] . "</strong><br><br></span>
                        Data da solicitação:<strong>" . $newdate . "</strong><br><br>
                        <strong>Contato:</strong> <a href='mailto:joaocordeiro2134@gmail.com'>joaocordeiro2134@gmail.com</a>");

        //Envia o email;

        if ($mail->send()) {
            include("../admin/backend/registra_envio_email.php");
            session_start();
            $_SESSION['EmailSucess'] = "E-mail enviado com sucesso";
            echo "<script>window.location = '../acoes/login'</script>";
        } else {
            session_start();
            $_SESSION['EmailErro'] = "E-mail n&atilde;o cadastrado";
            echo "<script>window.location = '../acoes/login'</script>";
        }
    } catch (Exception $e) {
        echo 'Erro ao enviar: ' . $e->getMessage();
    }
} else {
    session_start();
    $_SESSION['EmailErro'] = "E-mail n&atilde;o cadastrado no sistema";
    echo "<script>window.location = '../acoes/login'</script>";
}
