<?php

require_once('vendor/autoload.php');
require_once('../connection/conexao.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$tema_email = 'Mensagem de contato';
$destinatario = 'joaocordeiro2134@gmail.com';

    $mail = new PHPMailer(true); //Habilitar o disparo de exception;

    try{
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
                        <strong>Mensagem recebida</strong> <br> <br>
                        Nome da pessoa:<strong>" .$nome. "</strong><br><br>
                        Email da pessoa:<strong>" .$email. "</strong><br><br>
                        Assunto:<strong>" .$assunto. "</strong><br><br>
                        Mensagem:" .$mensagem. "<br><br>
                        Site cordeirovsk.com.br");

        //Envia o email;

        if($mail->send()){
            include("../admin/backend/registra_envio_email.php");
            $_SESSION['EmailSucess'] = "E-mail enviado com sucesso";            
            echo "<script>window.location = '../index'</script>";
        }
        else
        {
            $_SESSION['EmailErro'] = "E-mail n&atilde;o cadastrado";
            echo "<script>window.location = '../index'</script>";
        }
        
    }

    catch(Exception $e){
        echo 'Erro ao enviar: ' . $e->getMessage();
    }
?>
