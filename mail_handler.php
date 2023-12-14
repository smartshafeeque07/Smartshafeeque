<?php


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'From: smartshafeeque007@gmail.com'; 
$to = 'raselhasandurjoy@gmail.com'; 
$subject = 'Email From Smartshafeeque Portfolio';

$body = " From: $name\n E-Mail: $email\n Message: $message";

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
       $success = "Message successfully sent";
    } else {
        $success = "Message Sending Failed, try again";
    }
}
?>

<?php

header('location: https://saadportfolio.com/');
exit;



?>
