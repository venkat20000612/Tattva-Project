<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {

    $username = $_POST['username'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail->setFrom($email, $username);// from email
    $mail->addAddress('nemmani.nikhil@gmail.com');// to email
    $mail->Subject = "Contact Form Submission from $name";

    $body = "Contact Details Request:\n\n";
    $body .= "username: $username\n";
    $body .= "phone: $phone\n";
    $body .= "email: $email\n";
    $body .= "subject: $subject\n";
    $body .= "message: $message\n";

    $mail->Body = $body;
    $mail->send();

    echo "Your request has been submitted successfully!";

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

?>