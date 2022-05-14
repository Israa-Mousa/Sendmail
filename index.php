<?php

/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
// date_default_timezone_set('Etc/UTC');
require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
if(isset($_POST['submit'])){
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "testhadara96@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "1142100test";
//Set who the message is to be sent from
$mail->setFrom('israabzu@gmail.com');
//Set an alternative reply-to address
$mail->addReplyTo('testhadara96@gmail.com');
//Set who the message is to be sent to
$mail->addAddress('testhadara96@gmail.com');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
// $mail->AltBody = 'This is a plain-text message body';
$message=$_POST['message'];
$name=$_POST['name'];
$email=$_POST['email'];
$mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";
//send the message, check for errors
if (!$mail->send()) {
    // echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
}
// smtp_server=smtp.gmail.com
// smtp_port=465
// smtp_ssl=auto
// auth_username=testhadara96@gmail.com@
// auth_password=GMAIL_PASSWORD
// error_logfile=error.log

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send mail php</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />


</head>
<body class="bg-info">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 mt-3">
        <div class="card border-danger shadow">
          <div class="card-header bg-danger text-light">
            <h3 class="card-title">Contact Us</h3>
          </div>
          <div class="card-body px-4">
            <form action="#" method="POST">
              <div class="form-group">
                <!-- <?= $output; ?> -->
              </div>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
              </div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter E-Mail" required>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject"
                  required>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write Your Message"
                  required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send" class="btn btn-danger btn-block" id="sendBtn">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>