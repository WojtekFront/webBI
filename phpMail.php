<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 5;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.wp.pl';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'testkodu1@wp.pl';                     // SMTP username
    $mail->Password   = '123456Ab!';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = '465';                                    // TCP port to connect to
    $mail->CharSet = "UTF-8";
    $mail->setLanguage('pl', '/phpmailer/language');

    // Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   //$mail->addAttachment('CVLisowski.pdf');    // Optional name
   $mail->setFrom('testkodu1@wp.pl', 'Mailer');
   $mail->addAddress('testkodu1@wp.pl', 'Joe User');
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'zadanie z zajęć';
    $mail->Body    = '<h1>Test ąęż</h1>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
for($i=0;$i<=0;$i++){
    $mail->send();}
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
</body>
</html>