<?php

require_once 'vendor/autoload.php';
require_once 'config/default.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername(E_ADDRESS)
  ->setPassword(E_PASSWORD);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function sendVerificationMail($EMAIL, $TOKEN, $NAME)
{
    global $mailer;

    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Verify Email</title>
        <style>
        p{
             color:#404040;
             margin-left:40px;
        }
        a{
            background: #00264d;
            padding: 10px;
            border-radius:5px;
            color:#e6f2ff;
            text-decoration: none;
            margin-left: 50px;
        }
        a:hover{
            background:#004080;
        }
     </style>
    </head>
    <body>
        <div class="wrapper">
            <p>
                Greetings Mr/Mrs '.$NAME.', Welcome to IrionCycle, please click on the link below to verify your email.
            </p>
            <a href="https://localhost/irion/checkVerified.php?token='.$TOKEN.'">
                Verify your email Address.
            </a>
        </div>
    </body>
    </html>';

    $message = (new Swift_Message('Verify Your Email Address'))
        ->setFrom(E_ADDRESS)
        ->setTo($EMAIL)
        ->setBody($body, 'text/html');

    $result = $mailer->send($message);
}

function sendPasswordResetLink($EMAIL, $TOKEN)
{
    global $mailer;

    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Verify Email</title>
        <style>
        p{
             color:#404040;
             margin-left:40px;
        }
        a{
            background: #00264d;
            padding: 10px;
            border-radius:5px;
            color:#e6f2ff;
            text-decoration: none;
            margin-left: 50px;
        }
        a:hover{
            background:#004080;
        }
     </style>
    </head>
    <body>
        <div class="wrapper">
            <p>
                Hey we noticed you are trying to reset your password. Please click the button below to do so.
            </p>
            <a href="https://localhost/irion/checkVerified.php?password-token='.$TOKEN.'">
                Reset your password.
            </a>
        </div>
    </body>
    </html>';;

    $message = (new Swift_Message('Reset Password!'))
        ->setFrom(E_ADDRESS)
        ->setTo($EMAIL)
        ->setBody($body, 'text/html');

    $result = $mailer->send($message);   
}
