<?php
if (!empty($_POST['name']) && !empty($_POST['email'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "youremail@yourdomain.com"; // Ganti dengan email tujuanmu
    $subject = "Contact Form Submission";
    $body = "
        <p>New message received from: <b>$name</b></p>
        <p><b>Email:</b> $email</p>
        <p><b>Message:</b></p>
        <p>$message</p>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<span style='color:green; font-weight:bold;'>Thank you for contacting us, we will get back to you shortly.</span>";
    } else {
        echo "<span style='color:red; font-weight:bold;'>Sorry! Your form submission failed.</span>";
    }
} else {
    echo "<span style='color:red; font-weight:bold;'>Please fill all required fields.</span>";
}
?>
