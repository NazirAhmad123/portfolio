<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'iamnaziir@gmail.com';
    $subject = 'New Message from Contact Form';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "<p>New Message from Contact Form:</p>";
    $body .= "<p>Name: $name</p>";
    $body .= "<p>Email: $email</p>";
    $body .= "<p>Message: $message</p>";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Your message was sent successfully.';
    } else {
        echo 'There was a problem sending your message. Please try again.';
    }
}

?>
