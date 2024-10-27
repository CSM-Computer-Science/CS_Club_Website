<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'sheridant1@my.smccd.edu';
    $subject = 'New Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
