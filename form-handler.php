<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['tema'];
$message = $_POST['mensaje'];

$email_from = 'ameliaartesvisuales@gmail.com'
$email_subject = 'Nuevo correo'
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message .\n";

$to = 'f.ramirez492@outlook.es';

$headers = "From: $email_from \r\n";

$headers = "Reply to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Contacto.html")



?>