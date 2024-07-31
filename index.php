<!DOCTYPE html>
<html>
<head>
	<title>GRC Examination</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
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
				<form action="">
					<img src="./img/new3.png">
					<h2 class="title">Welcome</h2>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>Username</h5>
							<input type="text" class="input" name="username">
						</div>
					</div>
					<div class="input-div pass">
						<div class="i"> 
							<i class="fas fa-lock"></i>
						</div>
						<div class="div">
							<h5>Password</h5>
							<input type="password" class="input" name="password">
						</div>
					</div>
					<a href="#">Forgot Password?</a>
					<input type="submit" class="btn" value="Login">
					<p>Don't have an account? <a href="#" onclick="toggleForm();">Register here</a></p>
				</form>
			</div>

			<!-- Registration Form -->
			<div class="register-content" style="display: none; margin-left: 70px;">
				<form action="">
					<img src="./img/new3.png" height="100" width="100">
					<h2 class="title">Register</h2>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>Student Name</h5>
							<input type="text" class="input" name="student_name">
						</div>
					</div>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-id-badge"></i>
						</div>
						<div class="div">
							<h5>Student Number</h5>
							<input type="text" class="input" name="student_number">
						</div>
					</div>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-envelope"></i>
						</div>
						<div class="div">
							<h5>Email</h5>
							<input type="email" class="input" name="email">
						</div>
					</div>
					<div class="input-div pass">
						<div class="i"> 
							<i class="fas fa-lock"></i>
						</div>
						<div class="div">
							<h5>Password</h5>
							<input type="password" class="input" name="password">
						</div>
					</div>
					<input type="submit" class="btn" value="Register">
					<p>Already have an account? <a href="#" onclick="toggleForm();">Login here</a></p>
				</form>
			</div>
		</div>
	</div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
