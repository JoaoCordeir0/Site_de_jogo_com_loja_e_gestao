<?php

require_once('../../backend/vendor/autoload.php');
require_once('../../connection/conexao.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$tema_email = 'Lembrete de senha';

$timezone = new DateTimeZone('America/Sao_Paulo');
$date = new DateTime('now', $timezone);
$newdate = $date->format('d/m/Y H:i');

$id_mail = $_GET['mail'];

$identifica_email = $conexao->prepare("SELECT * FROM usuarios WHERE ID = '$id_mail'");
$identifica_email->execute();

$email = $identifica_email->fetch(PDO::FETCH_ASSOC);

$destinatario = $email['email'];

    $mail = new PHPMailer(true); //Habilitar o disparo de exception;

    try{
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP(); //Para enviar via funcção nativa do php, utiliza o $mail->isMail();
        
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

        $mail->addAddress("".$destinatario."");

        //configs do email;

        $mail->isHTML(true); //Corpo da mensagem em HTML;
        $mail->Subject = utf8_decode("".$tema_email." Cordeirovsk.com.br");
        $mail->Body = 
            utf8_decode("                        
                        <strong>Lembrete de senha </strong> <br> <br>
                        Data e hora:<strong>" .$newdate. "</strong><br><br>
                        Olá <strong>" .$email['nome']. "<strong>, suas credenciais:<br><br>
                        Usuario:<strong>" .$email['user']. "</strong><br><br>
                        Senha:<strong>" .$email['senha']. "</strong><br><br>                        
                        Site cordeirovsk.com.br");

        //Envia o email;

        if($mail->send()){
            include("registra_envio_email.php");
                if($email['acesso'] == 2)
                    echo "<script>window.location = '../gestores?acao=email-enviado'</script>";
                if($email['acesso'] == 1)
                    echo "<script>window.location = '../user?acao=email-enviado'</script>";
        }
        else
        {
            echo 'Erro ao enviar: ' . $e->getMessage();
        }
        
    }

    catch(Exception $e){
        echo 'Erro ao enviar: ' . $e->getMessage();
    }
?>
