<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $to = "harshada.kurahatti@gmail.com";
    $subject = "New message";

    mail ($to, $subject, $message, "From: " . $name);
    echo "Your message has been sent.";
?>
