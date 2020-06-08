<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require_once ('PHPMailer/PHPMailer.php');
require_once ('PHPMailer/SMTP.php');
require_once ('PHPMailer/Exception.php');

include_once('conexion.php');
include_once('utilidades.php');

$padecimiento ="";
$nombreUsuario = $_SESSION['name'];


//quien envia
$sender = 'info@nemaapp.com';
$senderName = 'NEMA APP';

//quien recibe
$recipient = 'juanf.romerog@gmail.com';

//SMTP VARIABLES
$usernameSmtp = 'AKIASDHT7UNJ7V4YK2PR';
$passwordSmtp = 'BMUGLw3GC02i6EHXQIMEYr/Nd9PjqYe7QO5b8bXcTWrX';
$host = 'email-smtp.us-east-1.amazonaws.com';
$port = 587;
$subject = 'TITULO DE CORREO';
$bodyText =  "CONTENIDO DE PRUEBA";
$bodyHtml = '<h1>TITULO DE CONTENIDO</h1>
    <p>HOLA</p>';

$mail = new PHPMailer(true);

try {
    //SMTP settings.
    $mail->isSMTP();
    $mail->setFrom($sender, $senderName);
    $mail->Username   = $usernameSmtp;
    $mail->Password   = $passwordSmtp;
    $mail->Host       = $host;
    $mail->Port       = $port;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';

    // QUIEN RECIBE
    $mail->addAddress($recipient);

    // CONTENIDO DE MAIL
    $mail->isHTML(true);
    $mail->Subject    = $subject;
    $mail->Body       = $bodyHtml;
    $mail->AltBody    = $bodyText;
    $mail->Send();
    echo "Email sent!" , PHP_EOL;
} catch (phpmailerException $e) {
    echo "An error occurred. {$e->errorMessage()}", PHP_EOL;
} catch (Exception $e) {
    echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; 
}

?>

