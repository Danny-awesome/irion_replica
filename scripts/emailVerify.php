<?php

require_once 'vendor/autoload.php';
require_once 'config/default.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername(E_ADDRESS)
  ->setPassword(E_PASSWORD);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function sendVerificationMail($email, $token)
{
    global $mailer;

    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Verify Email</title>
    </head>
    <body>
        <div class="wrapper">
            <p>
                Hey we noticed you registered on Irion. Please click on the link below to verify your email.
            </p>
            <a href="https://localhost/irion/checkVerified.php?token='.$token.'">
                Verify your email Address.
            </a>
        </div>
    </body>
    </html>';

    $message = (new Swift_Message('Verify Your Email Address'))
        ->setFrom(E_ADDRESS)
        ->setTo($email)
        ->setBody($body, 'text/html');

    $result = $mailer->send($message);
}

?>