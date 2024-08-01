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
			<div class="login-content" style="margin-left: 70px; margin-top: 200px;">
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
					<p>Don't have an account? <a href="#" onclick="toggleForm('student');">Register here</a></p>
				</form>
			</div>

			<?php
			if (isset($_POST['submit'])) {
				$email = $_POST['username'];
				$pass = $_POST['password'];

				// Check if user is a student
				$sql = "SELECT stud_email FROM student WHERE stud_email = '$email'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);

				if (isset($row['stud_email']) && $row['stud_email'] === $email) {
					$sql2 = "SELECT stud_pass FROM student WHERE stud_email = '$email'";
					$result2 = mysqli_query($conn, $sql2);
					$row2 = mysqli_fetch_assoc($result2);

					if (password_verify($pass, $row2['stud_pass'])) {
						$sql3 = "SELECT stud_id, stud_name FROM student WHERE stud_email = '$email'";
						$result3 = mysqli_query($conn, $sql3);
						$row3 = mysqli_fetch_assoc($result3);
						$_SESSION['stud_id'] = $row3['stud_id'];
						$_SESSION['stud_name'] = $row3['stud_name'];

						header('Location: ./student/home.php');
						exit();
					} else {
						echo "<script>swal('Invalid!', 'Invalid email or password, please try again!', 'error');</script>";
					}
				} else {
					// Check if user is an admin
					$sql4 = "SELECT admin_email FROM admin_tbl WHERE admin_email = '$email'";
					$result4 = mysqli_query($conn, $sql4);
					$row4 = mysqli_fetch_assoc($result4);

					if (isset($row4['admin_email']) && $row4['admin_email'] === $email) {
						$sql5 = "SELECT admin_pass FROM admin_tbl WHERE admin_email = '$email'";
						$result5 = mysqli_query($conn, $sql5);
						$row5 = mysqli_fetch_assoc($result5);

						if ($row5['admin_pass'] === $pass) {
							$sql6 = "SELECT admin_id FROM admin_tbl WHERE admin_email = '$email'";
							$result6 = mysqli_query($conn, $sql6);
							$row6 = mysqli_fetch_assoc($result6);
							$_SESSION['admin_id'] = $row6['admin_id'];

							header('Location: ./admin/home.php');
							exit();
						} else {
							echo "<script>swal('Invalid!', 'Invalid email or password, please try again!', 'error');</script>";
						}
					} else {
						// Check if user is a professor
						$sql7 = "SELECT prof_email FROM professor WHERE prof_email = '$email'";
						$result7 = mysqli_query($conn, $sql7);
						$row7 = mysqli_fetch_assoc($result7);

						if (isset($row7['prof_email']) && $row7['prof_email'] === $email) {
							$sql8 = "SELECT prof_pass FROM professor WHERE prof_email = '$email'";
							$result8 = mysqli_query($conn, $sql8);
							$row8 = mysqli_fetch_assoc($result8);

							if (password_verify($pass, $row8['prof_pass'])) {
								$sql9 = "SELECT prof_id, prof_name FROM professor WHERE prof_email = '$email'";
								$result9 = mysqli_query($conn, $sql9);
								$row9 = mysqli_fetch_assoc($result9);
								$_SESSION['prof_id'] = $row9['prof_id'];
								$_SESSION['prof_name'] = $row9['prof_name'];

								header('Location: ./professor/home.php');
								exit();
							} else {
								echo "<script>swal('Invalid!', 'Invalid email or password, please try again!', 'error');</script>";
							}
						} else {
							echo "<script>swal('Invalid!', 'Invalid email or password, please try again!', 'error');</script>";
						}
					}
				}
			}
			?>

			<!-- Student Registration Form -->
			<div class="register-content student-register-content" style="display: none; margin-left: 70px; margin-top: 200px;">
				<form action="" method="POST">
					<img src="./img/new3.png" height="100" width="100">
					<h2 class="title">Student Registration</h2>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>Student Name</h5>
							<input type="text" class="input" name="stud_name" required>
						</div>
					</div>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-id-badge"></i>
						</div>
						<div class="div">
							<h5>Student Number</h5>
							<input type="text" class="input" name="stud_number" required>
						</div>
					</div>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-envelope"></i>
						</div>
						<div class="div">
							<h5>Email</h5>
							<input type="email" class="input" name="stud_email" required>
						</div>
					</div>
					<div class="input-div pass">
						<div class="i"> 
							<i class="fas fa-lock"></i>
						</div>
						<div class="div">
							<h5>Password</h5>
							<input type="password" class="input" name="stud_pass" required>
						</div>
					</div>
					<input type="submit" class="btn" value="Register" name="stud_submit">
					<p>Already have an account? <a href="#" onclick="toggleForm('login');">Login here</a></p>
					<p>Are you a professor? <a href="#" onclick="toggleForm('professor');">Register as Professor</a></p>
				</form>
			</div>

			<!-- Professor Registration Form -->
			<div class="register-content professor-register-content" style="display: none; margin-left: 70px; margin-top: 200px;">
				<form action="" method="POST">
					<img src="./img/new3.png" height="100" width="100">
					<h2 class="title">Professor Registration</h2>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>Professor Name</h5>
							<input type="text" class="input" name="prof_name" required>
							</div>
						</div>
						<div class="input-div one">
							<div class="i">
								<i class="fas fa-id-badge"></i>
							</div>
							<div class="div">
								<h5>Employee Number</h5>
								<input type="text" class="input" name="prof_number" required>
							</div>
						</div>
						<div class="input-div one">
							<div class="i">
								<i class="fas fa-envelope"></i>
							</div>
							<div class="div">
								<h5>Email</h5>
								<input type="email" class="input" name="prof_email" required>
							</div>
						</div>
						<div class="input-div pass">
							<div class="i"> 
								<i class="fas fa-lock"></i>
							</div>
							<div class="div">
								<h5>Password</h5>
								<input type="password" class="input" name="prof_pass" required>
							</div>
						</div>
						<input type="submit" class="btn" value="Register" name="prof_submit">
						<p>Already have an account? <a href="#" onclick="toggleForm('login');">Login here</a></p>
						<p>Are you a student? <a href="#" onclick="toggleForm('student');">Register as Student</a></p>
					</form>
				</div>
			</div>

			<?php
			if (isset($_POST['stud_submit'])) {
				$stud_name = $_POST['stud_name'];
				$stud_number = $_POST['stud_number'];
				$stud_email = $_POST['stud_email'];
				$stud_pass = $_POST['stud_pass'];

				// Encrypt the password
				$hashed_pass = password_hash($stud_pass, PASSWORD_DEFAULT);

				// SQL query
				$sql10 = "INSERT INTO student(stud_name, stud_number, stud_email, stud_pass) VALUES('$stud_name','$stud_number','$stud_email','$hashed_pass')";

				// Execute the query
				if (mysqli_query($conn, $sql10)) {
					echo "<script>swal('Registered', 'You have been registered', 'success');</script>";
				} else {
					echo "<script>swal('Error', 'Registration failed, please try again', 'error');</script>";
				}
			}

			if (isset($_POST['prof_submit'])) {
				$prof_name = $_POST['prof_name'];
				$prof_number = $_POST['prof_number'];
				$prof_email = $_POST['prof_email'];
				$prof_pass = $_POST['prof_pass'];

				// Encrypt the password
				$hashed_pass = password_hash($prof_pass, PASSWORD_DEFAULT);

				// SQL query
				$sql11 = "INSERT INTO professor(prof_name, prof_number, prof_email, prof_pass) VALUES('$prof_name','$prof_number','$prof_email','$hashed_pass')";

				// Execute the query
				if (mysqli_query($conn, $sql11)) {
					echo "<script>swal('Registered', 'You have been registered', 'success');</script>";
				} else {
					echo "<script>swal('Error', 'Registration failed, please try again', 'error');</script>";
				}
			}
			?>


		</div>
		<script>
			const inputs = document.querySelectorAll(".input");

			function addcl(){
				let parent = this.parentNode.parentNode;
				parent.classList.add("focus");
			}

			function remcl(){
				let parent = this.parentNode.parentNode;
				if(this.value == ""){
					parent.classList.remove("focus");
				}
			}

			function toggleForm(formType) {
				const loginContent = document.querySelector('.login-content');
				const studentRegisterContent = document.querySelector('.student-register-content');
				const professorRegisterContent = document.querySelector('.professor-register-content');

				if (formType === 'login') {
					loginContent.style.display = 'block';
					studentRegisterContent.style.display = 'none';
					professorRegisterContent.style.display = 'none';
				} else if (formType === 'student') {
					loginContent.style.display = 'none';
					studentRegisterContent.style.display = 'block';
					professorRegisterContent.style.display = 'none';
				} else if (formType === 'professor') {
					loginContent.style.display = 'none';
					studentRegisterContent.style.display = 'none';
					professorRegisterContent.style.display = 'block';
				}
			}

			inputs.forEach(input => {
				input.addEventListener("focus", addcl);
				input.addEventListener("blur", remcl);
			});
		</script>
	</body>
</html>
