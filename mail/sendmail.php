<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Mailer {
    public function dathangmail($title, $content, $maildathang) {
        $mail = new PHPMailer(true);
        $mail -> CharSet = 'UTF-8';
        try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hoangleanhkhoi1908@gmail.com';
            $mail->Password = 'hvfm bgky jkyp foxo'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587; 
         
            //Recipients
            $mail->setFrom('hoangleanhkhoi1908@gmail.com', 'AnkoiStore');
            $mail->addAddress($maildathang); // Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
         
            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz'); 
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); 
         
            // Content
            $mail->isHTML(true);  
            $mail->Subject = $title;
            $mail->Body = $content;
         
            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}





?>