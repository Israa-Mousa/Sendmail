<?php
$result="";

if(isset($_POST['submit'])){
//  echo 'submit';
require 'phpmailer/PHPMailerAutoload.php';
// require 'phpmailer/class.smtp.php';
// require 'phpmailer/class.phpmailer.php';
    $message=$_POST['message'];
    $name=$_POST['name'];
    $email=$_POST['email'];

  // Create object of PHPMailer class
     $mail = new PHPMailer;
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->Port =587;
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = "testhadara96@gmail.com";
      // Gmail Password
      $mail->Password ='1142100test';
      $mail->SMTPSecure ='tls';
      // Email ID from which you want to send the email
      $mail->setFrom($email);
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('testhadara96@gmail.com');
      $mail->addReplyTo('testhadara96@gmail.com');
   

      $mail->isHTML(true);
      $mail->Subject = 'Form Submission';
      $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

      if(!$mail->send()){
          $result='Sorry we could not proceed ur request!';
      }
      else{
          $result='Your message has been Sent sucessfully';
      }
 

  }

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
                <?= $result; ?>
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
