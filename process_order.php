<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $heard = htmlspecialchars($_POST['heard']);
    $yarn = htmlspecialchars($_POST['yarn']);
    $custom = htmlspecialchars($_POST['custom']);
    $size = isset($_POST['size']) ? htmlspecialchars($_POST['size']) : 'N/A';
    $design = isset($_POST['design']) ? implode(", ", $_POST['design']) : 'N/A';
    $time = htmlspecialchars($_POST['time']);

    $to = "shalanielanette2010@gmail.com"; // Replace with your email
    $subject = "New Crochet Order from $name";
    $message = "
    Name: $name
    Heard About Us: $heard
    Yarn Type: $yarn
    Order Type: $custom
    Custom Size: $size
    Pre-made Design(s): $design
    Preferred Receiving Time: $time
    ";

    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your order has been submitted successfully.";
    } else {
        echo "Oops! Something went wrong. Please try again.";
    }
} else {
    echo "Invalid Request!";
}
?>
