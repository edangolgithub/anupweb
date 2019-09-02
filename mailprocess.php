<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmail/Exception.php';
require 'phpmail/PHPMailer.php';
require 'phpmail/SMTP.php';




$to=$_REQUEST['to'];
$mailbody=$_REQUEST['mail'];
$subject=$_REQUEST['subject'];
$mail = new PHPMailer(true);
try {
    
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'evanchess20@gmail.com';                     // SMTP username
    $mail->Password   = 'phpmail123@';                               // SMTP password
    $mail->Port       = 587;                                  // TCP port to connect to

    //Recipients
    $mail->setFrom('evanchess20@gmail.com', 'Evan Sir');
    $mail->addAddress($to, 'hi ');     // Add a recipient
  

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = '<h1>'.$mailbody.'</h1>';


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
