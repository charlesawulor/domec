<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "info@do-mec.com";
$subject = "Inquiry";
$body = "Browns engineering tech. \n
\n From : $email \n\n Name : $name \n\n  $message";
mail ($to,$subject,$body);

echo "Message sent . <a href='index.html'>click here</a> to continue";



?>
