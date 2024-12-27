<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $name = trim($_POST["name"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Set the recipient email address
    $to = "mabucaleb@gmail.com"; // Replace with your email address
    $subject = "New message from contact form";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>