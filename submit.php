<?php

//exit("fffffff");

// $result="";
$errors = [];
$data = [];
if(isset($_POST['submit'])){
//  echo 'submit';
require 'phpmailer/PHPMailerAutoload.php';
// require 'phpmailer/class.smtp.php';
// require 'phpmailer/class.phpmailer.php';
require 'config.php';
    $message=$_POST['message'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];

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
         // var_dump($conn);

        $sql = "insert into contact(Name,email,text,subject) values('$name','$email','$message','$subject')";
       // var_dump($sql);
        $result = $conn->query($sql);
        if ($result) {


            // return $result;
            $message=True;
            if (empty($name)){
                $arr = array(
                    'error_code'=>'1',
                    'message'=>'يرجى ادخال الاسم');

                  http_response_code(400);
                echo json_encode($arr);
                // return 1;
            }
            else{
            $arr = array(
                'error_code'=>'0',
                'message'=>'تم ارسال الطلب بنجاح');
               http_response_code(200);
            echo json_encode($arr);

            // return 1;
            // $data['success'] = true;}
        }

}

// $_SESSION['message'] = $message;
// die($_SESSION['message'] );
//header("Location: https://127.0.0.1/jplus1/jplus/#4thpage".$message );
         // header("Location: https://127.0.0.1/jplus1/jplus/#4thpage/$result");
      }


  }

  ?>
