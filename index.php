<?php
include("./conn.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>GRC Examination</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="./img/icon2.png" alt="icon2">
		</div>
		<div class="content">
			<!-- Login Form -->
			 <br><br><br><br><br><br><br><br>
			<div class="login-content" style="margin-left: 70px;">
				<form action="" method="POST">
					<img src="./img/new3.png">
					<h2 class="title">Welcome</h2>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>Username</h5>
							<input type="text" class="input" name="username" required>
						</div>
					</div>
					<div class="input-div pass">
						<div class="i"> 
							<i class="fas fa-lock"></i>
						</div>
						<div class="div">
							<h5>Password</h5>
							<input type="password" class="input" name="password" required>
						</div>
					</div>
					<a href="#">Forgot Password?</a>
					<input type="submit" class="btn" name="submit" value="Login">
					<p>Don't have an account? <a href="#" onclick="toggleForm();">Register here</a></p>
				</form>
			</div>

			<?php
				if (isset($_POST['submit']))
				{
					$email = $_POST['username'];
					$pass = $_POST['password'];

					$sql = "SELECT stud_email FROM student WHERE stud_email = '$email'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);

					if (isset($row['stud_email']) && $row['stud_email'] === $email)
					{
						$sql2 = "SELECT stud_pass FROM student WHERE stud_email = '$email'";
						$result2 = mysqli_query($conn, $sql2);
						$row2 = mysqli_fetch_assoc($result2);

						if ($row2['stud_pass'] === $pass)
						{
							$sql3 = "SELECT stud_id, stud_name FROM student WHERE stud_email = '$email'";
							$result3 = mysqli_query($conn, $sql3);
							$row3 = mysqli_fetch_assoc($result3);
							$_SESSION['stud_id'] = $row3['stud_id'];
							$_SESSION['stud_name'] = $row3['stud_name'];
							
							header('Location: ./student/home.php');
							exit();
						}

						else {
							?>
							<script>
								swal("Invalid!", "Invalid email or password please try again!", "error");
							</script>
							<?php
						}
					}

					else if (!isset($row['stud_email']) || $row['stud_email'] === NULL)
					{
						$sql4 = "SELECT admin_email FROM admin_tbl WHERE admin_email = '$email'";
						$result4 = mysqli_query($conn, $sql4);
						$row4 = mysqli_fetch_assoc($result4);

						if (isset($row['admin_email']) && $row['admin_email'] === $email)
						{
							$sql5 = "SELECT admin_pass FROM admin_tbl WHERE admin_email = '$email'";
							$result5 = mysqli_query($conn, $sql5);
							$row5 = mysqli_fetch_assoc($result5);

							if ($row5['admin_pass'] === $pass)
							{
								$sql6 = "SELECT admin_id FROM admin_tbl WHERE admin_email = '$email'";
								$result6 = mysqli_query($conn, $sql6);
								$row6 = mysqli_fetch_assoc($result6);
								$_SESSION['admin_id'] = $row6['admin_id'];

								header('Location: ./admin/home.php');
								exit();
							}
							
							else {
								?>
								<script>
									swal("Invalid!", "Invalid email or password please try again!", "error");
								</script>
								<?php
							}
						}
					}
				}
				?>

			<!-- Registration Form -->
			<div class="register-content" style="display: none; margin-left: 70px;">
				<form action="" method="POST">
					<img src="./img/new3.png" height="100" width="100">
					<h2 class="title">Register</h2>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>Student Name</h5>
							<input type="text" class="input" name="student_name" required>
						</div>
					</div>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-id-badge"></i>
						</div>
						<div class="div">
							<h5>Student Number</h5>
							<input type="text" class="input" name="student_number" required>
						</div>
					</div>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-envelope"></i>
						</div>
						<div class="div">
							<h5>Email</h5>
							<input type="email" class="input" name="reg_email" required>
						</div>
					</div>
					<div class="input-div pass">
						<div class="i"> 
							<i class="fas fa-lock"></i>
						</div>
						<div class="div">
							<h5>Password</h5>
							<input type="password" class="input" name="reg_password" required>
						</div>
					</div>
					<input type="submit" class="btn" value="Register" name="register">
					<p>Already have an account? <a href="#" onclick="toggleForm();">Login here</a></p>
				</form>
			</div>
		</div>
	</div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
