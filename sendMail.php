<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Set the recipient email address
  $to = 'cameronpeyton6@gmail.com';

  // Set the email subject
  $subject = 'New Form Submission';

  // Build the email content
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message: " . $message . "\n";

  // Set additional headers
  $headers = 'From: ' . $email . "\r\n";
  $headers .= 'Reply-To: ' . $email . "\r\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully.';
  } else {
    echo 'Sorry, an error occurred. Please try again later.';
  }
}
?>