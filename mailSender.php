<?php
include('PHPMailer/class.phpmailer.php');
$name = '';
$email = '';
$subject = '';
$body = '';
//Tutaj mail na ktory wysylamy formularz
//szmida.nazwa.pl/angular/contactForm.php
define('ADMIN_NAME', 'Marzena');
define('ADMIN_MAIL', 'marzena.badziak@gmail.com');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['body'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $body = trim($_POST['body']);

    echo $name . $email . $subject . $body;

    $mail = new PHPMailer;
    //var_dump($mail);
    $mail->setFrom($email, $name);
    $mail->addAddress(ADMIN_MAIL, ADMIN_NAME);
    $mail->addReplyTo($email, $name);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
    if(!$mail->send()) {
      echo 'Coś poszło nie tak ' . $mail->ErrorInfo;
    } else {
      echo 'Wysłaliśmy do ' . ADMIN_MAIL;
    }

  }

}
