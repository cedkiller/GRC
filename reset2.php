<?php
include('./conn.php');
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
    <div style="display: flex; justify-content: center; margin-top: 300px;" class="hidden_animation">
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
                    if (isset($_POST['submit'])) {
                        $email = $_SESSION['forgot'];
                        $pass = $_POST['pass'];
                        $confirm_pass = $_POST['confirm_pass'];

                        if ($pass === $confirm_pass) {
                            $hashpass = password_hash($pass, PASSWORD_DEFAULT);
                            $email = mysqli_real_escape_string($conn, $email); // Sanitize input

                            // Check if email belongs to a student
                            $sql = "SELECT stud_email FROM student WHERE stud_email = '$email'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);

                            if (isset($row['stud_email']) && $row['stud_email'] === $email) {
                                // Update student password
                                $sql2 = "UPDATE student SET stud_pass = '$hashpass' WHERE stud_email = '$email'";
                                if (mysqli_query($conn, $sql2)) {
                                    echo "<script>alert('Password updated successfully for student.');</script>";
                                    header('Location: ./index.php');
                                    exit();
                                } else {
                                    echo "<script>alert('Failed to update student password.');</script>";
                                }
                            } else {
                                // Check if email belongs to a professor
                                $sql3 = "SELECT prof_email FROM professor WHERE prof_email = '$email'";
                                $result3 = mysqli_query($conn, $sql3);
                                $row3 = mysqli_fetch_assoc($result3);

                                if (isset($row3['prof_email']) && $row3['prof_email'] === $email) {
                                    // Update professor password
                                    $sql4 = "UPDATE professor SET prof_pass = '$hashpass' WHERE prof_email = '$email'";
                                    if (mysqli_query($conn, $sql4)) {
                                        echo "<script>alert('Password updated successfully for professor.');</script>";
                                        header('Location: ./index.php');
                                        exit();
                                    } else {
                                        echo "<script>alert('Failed to update professor password.');</script>";
                                    }
                                } else {
                                    echo "<script>alert('Email not found in our system.');</script>";
                                }
                            }
                        } else {
                            echo "<script>alert('Passwords do not match. Please try again.');</script>";
                        }
                    }
                    ?>


            </div>
        </div>
    </div>
</body>
</html>