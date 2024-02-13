<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $make = $_POST['make'];
    $part = $_POST['partnew'];
    $year = $_POST['year'];
    $fuel_type = $_POST['fuel_type'];
    $message = $_POST['message'];

    // You can perform additional validation or processing here

    // Send email
    $to = "your-email@example.com"; // Your email address
    $subject = "New Contact Form Submission";
    $email_body = "Name: $name\nPhone: $phone\nMake: $make\nPart: $part\nYear: $year\nFuel Type: $fuel_type\nMessage: $message";
    $headers = "From: $name <$email>\r\n";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        // Email sent successfully
        echo "Thank you for your submission!";
    } else {
        // Error sending email
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Form not submitted
    echo "Form submission error!";
}
?>
