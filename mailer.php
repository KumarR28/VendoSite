<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
$to = 'palai@vendo-inc.com';
$subject = 'Message From Vendo Contact Page';
$message = 'FROM: '.$name.' Email: '.$email.' Message: '.$message;
$headers = 'From: mailprocessor@typeserve.com' . "\r\n";
 

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  
mail($to, $subject, $message, $headers);  
echo "Your email was sent!";  
}else{
echo "Invalid Email, please provide an correct email.";
}

?>