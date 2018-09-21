<?php

// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "wcslille@gmail.com";
$email_subject = "news request";

// validation expected data exists
if(!isset($_POST['first_name']) ||
    !isset($_POST['last_name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['telephone']) ||
    !isset($_POST['comments'])) {
    die('We are sorry, but there appears to be a problem with the form you submitted.');
}


//clean data after submit

$first_name = htmlentities($_POST['first_name']); // required
$last_name = htmlentities($_POST['last_name']); // required
$email_from = htmlentities($_POST['email']); // required
$telephone = htmlentities($_POST['telephone']); // required
$comments = htmlentities($_POST['comments']); // required

$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if (!preg_match($email_exp, $email_from)) {
    $error_message .= "The Email Address you entered does not appear to be valid.<br />";
}

$string_exp = "/^[A-Za-z .'-]+$/";

if (!preg_match($string_exp, $first_name)) {
    $error_message .= "The First Name you entered does not appear to be valid.<br />";
}

if (!preg_match($string_exp, $last_name)) {
    $error_message .= "The Last Name you entered does not appear to be valid.<br />";
}

if (strlen($comments) < 2) {
    $error_message .= "The Comments you entered do not appear to be valid.<br />";
}

if (strlen($error_message) > 0) {
    die($error_message);
}

function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"", $string);
}


$email_message = "";
$email_message .= "first Name: ".clean_string($first_name)."\n";
$email_message .= "last Name: ".clean_string($last_name)."\n";
$email_message .= "email: ".clean_string($email_from)."\n";
$email_message .= "telephone: ".clean_string($telephone)."\n";
$email_message .= "comments: ".clean_string($comments)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
//back home page
header("location: index.php");