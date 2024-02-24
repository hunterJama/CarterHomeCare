<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['first_name'];
    $email = $_POST['Email'];
    $message = $_POST['message'];

    // Compose email
    $to = "starttech2002@gmail.com";
    $subject = "New Subscription";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "<p>Your message has been sent successfully. Thank you!</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
}
?>