<?php

if(isset($_POST['email'])) {
    $to = "matthieu.dbng@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Someone contacted you";
    $subject2 = "matthieu-duret.fr";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);
}