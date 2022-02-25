<?php 
if($mail->send()){

    //connection ->
    $servername = "fdb32.awardspace.net";
    $database = "3967906_cordeiro";
    $username = "3967906_cordeiro";
    $password = "vsk@dm2134";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    //fim connection

    $ip = $_SERVER['REMOTE_ADDR'];
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $date = new DateTime('now', $timezone);
    $newdate = $date->format('d/m/Y H:i');
    $id_mail = $_GET['mail'];

    $sql = "INSERT INTO registro_emails (tema_email, data_envio, ip_envio, destinatario) VALUES ('$tema_email', '$newdate', '$ip', '$destinatario')";

    if (mysqli_query($conn, $sql)) {        
        
    } else {       
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);  
    }
    mysqli_close($conn);
}
