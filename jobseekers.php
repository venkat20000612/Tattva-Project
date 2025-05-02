<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Form data
    $firstName = $_POST['fname'] ?? '';
    $lastName = $_POST['lname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $messageText = $_POST['message'] ?? '';
    $jobTypes = isset($_POST['jobType']) ? implode(", ", $_POST['jobType']) : 'None';

    // Email content
    $body = "New job application:\n";
    $body .= "First Name: $firstName\n";
    $body .= "Last Name: $lastName\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Address: $address\n";
    $body .= "Job Type: $jobTypes\n";
    $body .= "Message: $messageText\n";

    // Email setup
    $mail->setFrom($email, "$firstName $lastName");
    $mail->addAddress('nemmani.nikhil@gmail.com');
    $mail->Subject = "New Job Application Received";
    $mail->Body = $body;

    // File attachment
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
        $mail->addAttachment($_FILES['resume']['tmp_name'], $_FILES['resume']['name']);
    }

    $mail->send();
    echo "Application submitted successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
