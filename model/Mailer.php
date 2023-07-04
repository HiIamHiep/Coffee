<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once './view/admin/PHPMailer/src/Exception.php';
require_once './view/admin/PHPMailer/src/PHPMailer.php';
require_once './view/admin/PHPMailer/src/SMTP.php';

class Mailer
{

    public function send_mail($email, $name, $title, $content): void
    {
        $mail = new PHPMailer(false);
        try
        {
            //Server settings
            $mail->SMTPDebug  = 0;
            $mail->isSMTP(); // using SMTP protocol
            $mail->Host = 'smtp.gmail.com'; // SMTP host as gmail
            $mail->SMTPAuth = true;  // enable smtp authentication
            $mail->Username = 'hiep231122@gmail.com';  // sender gmail host
            $mail->Password = 'ksawjisgytjoxsct'; // sender gmail host password
            $mail->SMTPSecure = 'tls';  // for encrypted connection
            $mail->Port = 587;   // port for SMTP
            $mail->SMTPSecure = "tls";
            $mail->CharSet = "UTF-8"; // set unicode chars

            $mail->setFrom('bobbycoffee@gmail.com', "Bobby Coffee"); // sender's email and name
            $mail->addAddress($email, $name);  // receiver's email and name

            //Content
            $mail->isHTML(true);
            $mail->Subject = $title;
            $mail->Body = $content;

            $mail->send();
        }
        catch
        (Exception $e) { // handle error.
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }

}