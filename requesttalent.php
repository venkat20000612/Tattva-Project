<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Collect form data safely
    $name = $_POST['fname'] ?? '';
    $company = $_POST['company_name'] ?? '';
    $location = $_POST['company_location'] ?? '';
    $phone = $_POST['Phone_number'] ?? '';
    $email = $_POST['Email'] ?? '';
    $specialisation = $_POST['specialisation'] ?? '';
    $pronoun = $_POST['pronoun'] ?? '';
    $position = $_POST['post'] ?? '';
    $openings = $_POST['openings'] ?? '';
    $jobLocation = $_POST['location'] ?? '';
    $rate = $_POST['rate'] ?? '';

    // Email config
    $mail->setFrom($email, $name);
    $mail->addAddress('nemmani.nikhil@gmail.com');
    $mail->Subject = "Talent Request from $name ($company)";

    $body = "New Talent Request:\n\n";
    $body .= "Name: $name\n";
    $body .= "Company: $company\n";
    $body .= "Company Location: $location\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Specialisation: $specialisation\n";
    $body .= "Preferred Pronoun: $pronoun\n";
    $body .= "Position Hiring For: $position\n";
    $body .= "Number of Openings: $openings\n";
    $body .= "Job Location: $jobLocation\n";
    $body .= "Pay Rate Range: $rate\n";

    $mail->Body = $body;
    $mail->send();

    echo "Your request has been submitted successfully!";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>
