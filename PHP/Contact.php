<?php
    $name = $_POST['yourName'];
    $visitor_email = $_POST['mail'];
    $message = $_POST['message'];

    $email_from = 'mdtasinanwar000@gmail.com';

    $emailsubject = "New Form Submission Of Your Website";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "mdtasinanwar8@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $emailsubject, $email_body, $headers);

    header("Location: Contact.html")
?>