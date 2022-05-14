<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//here we need to edit php.ini and sendemails.ini
$headers = "From: israabzu@gmail.com\r\n";
echo $headers;

$to = "testhadara96@gmail.com";
$subject = "Sending Emails From Localhost";
$message = "Sending emails from".$headers ;

if ( mail($to, $subject, $message, $headers) ){
    echo 'Success!';}
else{
    echo 'UNSUCCESSFUL...';
}



//  /// send and email using php mailer   
//     require 'phpmailer/PHPMailerAutoload.php';


//     $mail = new PHPMailer;
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->Port =587;
//     $mail->SMTPAuth = true;
//     $email="israa.mazaraa@yaho.com";
//     $name="israa test";
//     $message='Hi this email by php mailer';
//     // Gmail ID which you want to use as SMTP server
//     $mail->Username = "testhadara96@gmail.com";
//     // Gmail Password
//     $mail->Password ='1142100test';
//     $mail->SMTPSecure ='tls';
//     // Email ID from which you want to send the email
//     $mail->setFrom($email);
//     // Recipient Email ID where you want to receive emails
//     $mail->addAddress('testhadara96@gmail.com');
//     $mail->addReplyTo('testhadara96@gmail.com');
 

//     $mail->isHTML(true);
//     $mail->Subject = 'Form Submission';
//     $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

//     if(!$mail->send()){
//         $result='Sorry we could not proceed ur request!';
//     }
//     else{
//         $result='Your message has been Sent sucessfully';
//     }


?>
</body>
</html>