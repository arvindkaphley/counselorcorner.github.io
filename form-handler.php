<?php
$name = $_Post['name'];
$visitor_email = $_Post['email'];
$visitor_number = $_Post['phone'];
$subject =  $_Post['subject'];
$message =  $_Post['message'];


$email-form = 'counselorscorner.impact@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Phone: $visitor_number.\n".
                        "User Subject: $subject.\n".
                            "User Message: $message.\n";

$to = 'counselorscorner.impact@gmail.com';

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>