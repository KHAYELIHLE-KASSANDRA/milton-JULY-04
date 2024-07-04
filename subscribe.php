<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];

        $to = "milton@gmail.com";
        $subject = "Newsletter Subscription Request";
        $message = "I want to subscribe to the newsletter.";
        $headers = "From: " . $email;

        if (mail($to, $subject, $message, $headers)) {
            echo "Subscription request sent successfully.";
        } else {
            echo "Failed to send the subscription request.";
        }
    } else {
        echo "Email is required.";
    }
}
?>
