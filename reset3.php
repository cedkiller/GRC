<?php
include('./conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script defer src="./js/app.js"></script>
</head>
<body>
    <img class="wave" src="img/wave.png">
    <div style="display: flex; justify-content: center; margin-top: 270px;" class="hidden_animation">
        <div class="div21">
            <br>
            <div style="display: flex; justify-content: center;">
                <div>
                    <form action="" method="POST">
                        <label for="" class="label20">Password <span style="color: red;">*</span></label><br><br>
                        <input type="text" placeholder="Enter your password" name="pass" class="input20" required><br><br>
                        <label for="" class="label20">Confirm Password <span style="color: red;">*</span></label><br><br>
                        <input type="password" placeholder="Enter your password" name="confirm_pass" class="input20" required>
                        <br><br>
                        <center><input type="submit" value="Enter" name="submit" class="submit"></center>
                    </form>
                </div> 

                <?php
                if (isset($_POST['submit']))
                {
                    $email = $_SESSION['forgot'];

                    $pass = $_POST['pass'];
                    $confirm_pass = $_POST['confirm_pass'];

                    $sql = "SELECT stud_email FROM student WHERE stud_email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);

                    if (isset($row['stud_email']) && $row['stud_email'])
                    {
                        if ($pass === $confirm_pass)
                        {
                            $hashpass = password_hash($pass, PASSWORD_DEFAULT);
                            $sql2 = "UPDATE student SET stud_pass = '$hashpass' WHERE stud_email = '$email'";

                            if (mysqli_query($conn, $sql2))
                            {
                                session_destroy();
                                header('Location: ./index.php');
                                exit();
                            }
                        }

                        else 
                        {
                            echo "<script>swal('Invalid!', 'Please confirm your password in your entered password!', 'error');</script>";
                        }
                    }

                    else {
                        if ($pass === $confirm_pass)
                        {
                            $hashpass2 = password_hash($pass, PASSWORD_DEFAULT);
                            $sql3 = "UPDATE professor SET prof_pass = '$hashpass2' WHERE prof_email = '$email'";

                            if (mysqli_query($conn, $sql3))
                            {
                                session_destroy();
                                header('Location: ./index.php');
                                exit();
                            }
                        }    
                        
                        else {
                            echo "<script>swal('Invalid!', 'Please confirm your password in your entered password!', 'error');</script>";
                        }
                    }
                }
                ?>

            </div>
        </div>
    </div>
</body>
</html>
