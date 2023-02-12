<?php
// error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\Exception;


require ('phpmailer/src/Exception.php');
require ('phpmailer/src/PHPMailer.php');
require ('phpmailer/src/SMTP.php');


if(isset($_POST['send'])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'navinpatidar890@gmail.com';
    $mail->Password = 'jhvpjihaeuxwqfut';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('navinpatidar890@gmail.com');

    $mail->addAddress($_POST["email"]);
     
    $mail->isHTML(true);
    
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];
    $mail->send();

    echo "<script> alert('send succssfully')</script>";
}

?>

<!DOCTYPE html>
<html >
<head>
    <title>Send Email</title>
    <style>
      
    body{
        background-color: bisque;
    }
    .label3{
        margin-right: 130px;
        font-family: cursive;
    }
    .label2{
        margin-right: 140px;
        font-family: cursive;

    }
    .label{
        margin-right: 150px;
        font-family: cursive;

    }
    .heading{
font-family: cursive;
    }
    .btn{
        height: 30px;
        width: 80px;
        border-radius: 5px;
        border: none;
        background-color: #025DF6;
        color: white;
        font-size: 15px;
    }


    .input{
        width: 200px;
        height: 30px;
        border-radius:10px;
        border:none;
    }
    </style>
</head>
<body>
    <center><form action="" method="post" class="main_form">
        <h1 class="heading">Email Sending System</h1>
        <label class="label">Email:</label><br>
        <input type="email" name="email" value="" class="input"><br><br>
        <label class="label2">Subject:</label><br>
        <input type="text" name="subject" value="" class="input"><br><br>
        <label class="label3">Message:</label><br>
        <input type="text" name="message" value="" class="input"><br><br>    
    <button type="submit" name="send" class="btn">send</button>
    </form><center>
</body>
</html>