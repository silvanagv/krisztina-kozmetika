
<?php

$email = $_POST['email'];



$to = "silvanagoberdhanvigle@gmail.com";
$subject = "Krizstina Kozmetika Message";
$body = "This is an automated message. Please do not reply.\n\n $email";


mail($to, $subject, $body);
echo "Your message has been sent. We will get back to you within two days, thanks for getting in touch!";
?>