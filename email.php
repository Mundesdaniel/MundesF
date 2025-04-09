<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mundesdaniel@gmai.com"; // your email
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    $fullMessage = "You received a message from your website:\n\n".
                   "Name: $name\n".
                   "Email: $email\n".
                   "Subject: $subject\n\n".
                   "Message:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "There was a problem sending the message.";
    }
}
?>
