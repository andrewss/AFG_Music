<?php
$valid = 1;

$fname = trim(filter_var($_POST['fname'], FILTER_SANITIZE_EMAIL));
$lname = trim(filter_var($_POST['lname'], FILTER_SANITIZE_EMAIL));
$phone = trim(filter_var($_POST['phone'], FILTER_SANITIZE_EMAIL));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$message = trim(filter_var($_POST['message'], FILTER_SANITIZE_EMAIL));

if(strlen($fname) < 1 || strlen($fname) > 30 ){
	$valid = 0;
}
if(strlen($lname) < 1 || strlen($lname) > 30){
	$valid = 0;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$valid = 0;
}
if(strlen($message) < 1){
	$valid = 0;
}


if($valid === 1){
	$from = $fname . " " . $lname; // sender
    $subject = "AFG-Music.com email from: " . $fname . " " . $lname;
    $msg = "Name: " . $fname . " " . $lname . "
    Email: " . $email . "
    Phone: " . $phone . "
    Message: 
    "; 
    $msg .= wordwrap($message, 70);
    mail("atetnowski@gmail.com",$subject,$message,"From: $from\n");

    header('location: contact.php');
} else {
    header('location: contact.php?fail=1');
}
?>