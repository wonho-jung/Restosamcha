<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$email_from = 'restosamcha@gmail.com';

$email_subject = "New From Samcha website page!!!";

$email_body = "User Name: $name\n".
            "User Email: $visitor_email\n".
            "User Phone: $phone\n".
            "User Message: $message.\n";


    $to = "restosamcha@gmail.com";

    $headers = "Form: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: ../index.html");

?>