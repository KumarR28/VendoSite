<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
 
$to = 'palai@vendo-inc.com';
$subject = 'Message From Vendo Careers Page';
$message = 'FROM: '.$name.' Email: '.$email.' Message: '.$message.' Phone: '.$phone;
$headers = 'From: mailprocessor@typeserve.com';
 

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  
mail($to, $subject, $message, $headers);  
echo "Your email was sent!";  
}else{
echo "Invalid Email, please provide an correct email.";
}

?>