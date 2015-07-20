<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$verify = intval($_POST['verify']);

$from = 'Website Contact Form';
$to = 'domain@domain.com';
$mailsubject = 'Message from Contact form on your website!'

$body = "From $name\n Email: $email\n Message:\n $message";
