<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = "nazir_noori@yahoo.com";
  $subject = "Website Contact Form Submission";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
  $headers = "From: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "Form submitted successfully!";
  } else {
    echo "Failed to submit form. Please try again later.";
  }
} else {
  echo "Failed to submit form. Please fill in all fields.";
}
