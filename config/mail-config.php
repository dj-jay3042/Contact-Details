<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require dirname(dirname(__FILE__)) . '/includes/PHPMailer/src/Exception.php';
require dirname(dirname(__FILE__)) . '/includes/PHPMailer/src/PHPMailer.php';
require dirname(dirname(__FILE__)) . '/includes/PHPMailer/src/SMTP.php';
// Create a PHPMailer instance
$mail = new PHPMailer();

// Configure SMTP settings (if needed)
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'jay.chauhan3042@gmail.com';
$mail->Password = 'jhbjbqtvhzqghzvp';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

// Enable HTML content in the email body
$mail->isHTML(true);

// Set the email's sender and recipient
$mail->setFrom('jay.chauhan3042@gmail.com', 'Jay Chauhan');

?>