<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {

    $company_name = $_POST['company_name'] ?? '';
    $web_url = $_POST['web_url'] ?? '';
    $industry = $_POST['industry'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['Email'] ?? '';
    $address = $_POST['address'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail->setFrom($email, $name);
    $mail->addAddress('nemmani.nikhil@gmail.com');
    $mail->Subject = "Company Details from $name ($company_name)";

    $body = "Company Details Request:\n\n";
    $body .= "company_name: $company_name\n";
    $body .= "web_url: $web_url\n";
    $body .= "industry: $industry\n";
    $body .= "phone: $phone\n";
    $body .= "email: $email\n";
    $body .= "address: $address\n";
    $body .= "Job description: $message\n";

    $mail->Body = $body;
    $mail->send();

    echo "Your request has been submitted successfully!";

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>