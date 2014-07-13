<?php

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'login') {
    header('Location: login.php'); exit;
}
	
// get the posted data
$email = $_POST['emailLogin'];
$senha = $_POST['senhaLogin'];

// check that an email address was entered
if (empty($email)) 
    $error = 'Você precisa inserir um email.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email))
    $error = 'Você precisa inserir um email válido.';
// check that a phone number was entered
elseif (empty($senha))
    $error = 'Você precisa inserir a senha';

// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: login.php?e='.urlencode($error)); exit;
}

//$headers = "From: $email_address\r\n"; 
//$headers .= "Reply-To: $email_address\r\n";

// write the email content
//$email_content = "Name: $name\n";
//$email_content .= "Email Address: $email_address\n";
//$email_content .= "Phone Number: $phone\n";
//$email_content .= "Message:\n\n$message";
	
// send the email
//ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
//mail ('YOUR-EMAIL-ADDRESS@YOUR-DOMAIN.com', 'YOUR WEBSITE NAME - Contact Form Submission', $email_content, $headers);
	
// send the user back to the form
header('Location: index.html?s='.urlencode('Bem vindo.')); exit;

?>