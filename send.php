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

//Check if name field has been filled Out
if (!$_POST['name']) {
  $errname = 'Please enter your name';
}

//Check email field has been filled out and is a valid email address
if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $erremail = 'Please enter a valid email address';
}

//Check if subject line has been filled out
if (!$_POST['subject']) {
  $errsubject = 'Please enter a subject';
}

//Check if the message box has been filled out
if (!$_POST['message']) {
  $errmessage = 'Please enter your message';
}

//Check to see if verification field has been filled out correctly
if ($verify !== 8) {
  $errverify = 'The answer is incorrect, please try again';
}

// If all is correct and there are no errors then send the email
if (!errname && !erremail && !errsubject && !errmessage && !errverify) {
  if (mail ($to, $subject, $body, $from)) {
    $result ='<div class="alert alert-success"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true">Thank you, your message has been sent.</span></div>';
  else {
    $result ='<div class="alert alert-danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true">Sorry there was an error sending your message, please check all fields are correct and try again.</span></div>';
  }
  }
}
