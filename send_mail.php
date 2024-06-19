<?php

$webmaster_email = 'shirishkc07.com';
$feedback_page = 'index.html';
$error_page = 'error_message.html';
$thankyou_page = 'thank_you.html';

$email_address = $_REQUEST['email'];
$comments = $_REQUEST['Query'];
$first_name = $_REQUEST['name'];

$msg = "First Name: $first_name\r\nEmail: $email_address\r\nComments: $comments";

function isInjected($str) {
    $injections = array(
        '\n+', 
        '\r+', 
        '\t+', 
        '%0A+', 
        '%0D+', 
        '%08+', 
        '%09+',  
    );
    $pattern = '/(' . implode('|', $injections) . ')/i';
    return preg_match($pattern, $str) > 0;
}

?>