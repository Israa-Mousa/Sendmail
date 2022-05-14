
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send mail php</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
    <link
        rel="stylesheet"
        href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      />

      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <style>
      body {font-family: Arial, Helvetica, sans-serif;}
      * {box-sizing: border-box;}

      input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        text-align:right;
        /* text-align: right; */
      }

      input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;

      }

      input[type=submit]:hover {
        background-color: #45a049;
      }

      .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      }
      .contact-form {
  border-radius: 5px;
  background-image: url("contactus.png");
 background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
  padding: 20px;
  margin-top:90px;
  margin-bottom:120px;
  color:white !important;
 min-height:650px;
}
      </style>
</head>
<body class="bg-info">
  <div class="section sec-6" id="section6" style="text-align:right; color:white !important;">
        <div class="sec-6-overlay"></div>
        <div class="sec-6-overlay-2"></div>



        <div class="container sec-6-container">




  <form action="" method="post" style="" class="contact-form">
    <div class="message-wrapper" style="color:red;">
    </div>
  <h3 style="text-align:center !important;" >تواصل معنا</h3>

  <?php


?>

    <label for="name">الاسم </label>
    <input type="text" id="name" name="name" placeholder=".. ادخل لاسم من فضلك">

    <label for="email">البريد الالكتروني</label>
    <input type="text" id="lname" name="email" placeholder=".. ادخل البريد الالكتروني من فضلك">

    <label for="subject">عنوان الرسالة </label>
    <input type="text" id="subject" name="subject" placeholder=".. ادخل عنوان الرسالة من فضلك">

    <label for="message">الرسالة </label>
    <textarea id="message" name="message" placeholder="ادخل الرسالة من فضلك" style="height:200px"></textarea>
    <input type="hidden" name="submit" value="1">
    <!-- <button type="submit" value="submit" id="submit" style="background-color:green; "name="submit">submit</button> -->
    <input type="submit" value="submit" style="margin-right:40px;">


  </form>

</div>
<script>
$(document).ready(function () {
    $('form').on('submit',function (event){
        event.preventDefault();
        var _url = 'submit.php';
        // alert('asdnalkjsdnm');
        $.ajax({
            url:_url,
            method:'POST',
            data:$(this).serialize(),
            success:function (response){
              // alert(response);
                var _res = JSON.parse(response);
                $('.message-wrapper').html(_res.message);
            },
            error:function(response){
                console.log(response.responseText);
               // alert('y send empty phone number');
               //  console.log('israa');
               // console.log(JSON.parse(response));
               //  console.log('israa');
               var _res = JSON.parse(response.responseText);
               console.log(_res.message);
               $('.message-wrapper').html(_res.message);
            }

        })
    })
    });
</script>

</body>
</html>
