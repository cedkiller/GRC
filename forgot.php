<?php
include('./conn.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script defer src="./js/app.js"></script>
</head>
<body>
    <img class="wave" src="img/wave.png">
    <div style="display: flex; justify-content: center; margin-top: 350px;" class="hidden_animation">
        <div class="div20">
            <a href="./index.php"><button class="exit">X</button></a>
            <br>
            <div style="display: flex; justify-content: center;">
                <div>
                    <form action="" method="POST">
                        <input type="text" placeholder="Enter your email address" name="email" class="input20" required>
                        <br><br>
                        <center><input type="submit" value="Enter" name="submit" class="submit"></center>
                    </form>
                </div> 

                <?php
                if (isset($_POST['submit']))
                {
                    $email = $_POST['email'];

                    $sql = "SELECT stud_email FROM student WHERE stud_email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);

                    if ($row['stud_email'] === $email)
                    {
                        $mail = new PHPMailer(true);

                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'aniamaesantos0@gmail.com';
                        $mail->Password = 'eskmnqzpoblrpruw';
                        $mail->SMTPSecure = 'ssl';
                        $mail->Port = 465;

                        $mail->setFrom('aniamaesantos0@gmail.com');

                        $mail->addAddress($_POST["email"]);

                        $mail->isHTML(true);

                        $mail->Subject = 'Reset Password';
                        $mail->Body = '<div>
                        <p style="font-family: Arial, Helvetica, sans-serif;"><b>Hello!</b></p>
                        <p>You are recieving this email because we recieved a password reset request for your account.</p>
                        <br>
                        <a href="http://localhost/mina/updatePass.php" style="text-decoration: none;"><button style = "cursor: pointer;
                        height: 40px;
                        width: 250px;
                        padding: 9px 25px;
                        background: #f50c0c;
                        color: white;
                        border-radius: 10px;
                        border: none;
                        font-size: 17px;
                        font-family: Arial, Helvetica, sans-serif;
                        font-weight: bold;
                        opacity: 1;">Reset Password</button></a>
                        <br>
                        <p>If you did not request a password reset, no further action is required.</p>
                        </div>';

                        $mail->send();


                        echo "<script>swal('Send!', 'Please check your email!', 'success');</script>";
                    }

                    else {
                        echo "<script>swal('Invalid!', 'This email is not registered!', 'error');</script>";
                    }
                }
                ?>

            </div>
        </div>
    </div>
</body>
</html>