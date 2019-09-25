<!DOCTYPE html>
<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="index.css">
			<title>Room Booking System</title>
		</head>
		<body>
			<div id='grid'>
				<div id='header'>
					<div id="switchTab">
							<a id="login" href="login.php"> Login </a>
							<a id="signUp" href="index.php"> Sign Up </a>
					</div> 
				</div>
				<div id='content'>
					<div id="welcome">
						<h3>Welcome!</h3>
					</div>
					<form method='post' action='' id='registerForm'>
						<input type='text' name='firstName' id='firstName' placeholder='First Name' class='registerButtons'>
						<input type='text' name='lastName' id='lastName' placeholder='Last Name' class='registerButtons'>
						<input type='email' name='email' id='email' placeholder='Email' class='registerButtons'>
						<input type='text' name='registerUser' id='registerUser' placeholder='Username' class='registerButtons'>
						<input type='password' name='password' id='password' placeholder='Password' class='registerButtons'>
						<input type='password' name='cfmpassword' id='cfmpassword' placeholder='Confirm Password' class='registerButtons'>
						<p id='terms'> By creating an account you agree to our <a href='#'>Terms &amp; Conditions</a>.</p>
						<input type='submit' name='submit' id='submit' value='Create Account'>
					</form>
				</div>
				<div id='footer'>
				</div>
		</div>
	</body>
</html>