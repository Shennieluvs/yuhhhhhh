<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email address where you want to receive messages
    $to = "dimaapi.nicolezeann@stcbauan.edu.ph";

    $headers = "From: $name <$email>" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Sending the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>
