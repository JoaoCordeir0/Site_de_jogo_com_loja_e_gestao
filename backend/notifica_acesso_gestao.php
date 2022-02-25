<?php

require_once('../../backend/vendor/autoload.php');
require_once('../../connection/conexao.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ip = $_SERVER['REMOTE_ADDR'];
$timezone = new DateTimeZone('America/Sao_Paulo');
$date = new DateTime('now', $timezone);
$newdate = $date->format('d/m/Y H:i');

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

        $mail->addAddress('joaocordeiro2134@gmail.com');

        //configs do email;

        $mail->isHTML(true); //Corpo da mensagem em HTML;
        $mail->Subject = utf8_decode("Novo acesso na GESTÃO");
        $mail->Body = 
            utf8_decode("                        
                        <strong>Novo acesso</strong> <br> <br>
                        Usuario utilizado:<strong>" .$user['nome']. "</strong><br><br>
                        Ip da pessoa:<strong>" .$ip. "</strong><br><br>
                        Data e hora:<strong>" .$newdate. "</strong><br><br>
                        Site cordeirovsk.com.br");

        //Envia o email;

        if($mail->send()){
           
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
