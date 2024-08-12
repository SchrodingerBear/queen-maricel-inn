<?php

require_once 'connect.php';
$gmail = $_REQUEST['gmail'];
$price = $_REQUEST['price'];
$name = $_REQUEST['name'];
$name = ucfirst($name);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/SMTP.php';

$email = $gmail;
$message = "We have Received your Transaction $name! <br> Your Bill is $price <br> Enjoy your Stay with us!";

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 0; // Disable debugging for production
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'ojt.rms.group.4@gmail.com'; // Your Gmail username
    $mail->Password = 'hbpezpowjedwoctl'; // Your Gmail password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption
    $mail->Port = 587; // TCP port to connect to

    // Recipients
    $mail->setFrom('ojt.rms.group.4@gmail.com', 'Message Notification');
    $mail->addAddress($email); // Add recipient email

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Message';

    // HTML message with basic styling
    $mail->Body = '
        <html>
        <head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 20px;
                }
                .container {
                    max-width: 600px;
                    margin: 0 auto;
                    background-color: #fff;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    border-radius: 8px;
                    padding: 20px;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <p>You have a new message:</p>
                <p>' . nl2br($message) . '</p>
            </div>
        </body>
        </html>
    ';

    // Send the email
    $mail->send();

    header("location:confirmmessage.php");


} catch (Exception $e) {
    header("location:confirmmessage.php");
}