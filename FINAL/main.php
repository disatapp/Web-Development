<!DOCTYPE HTML>
<html lang="en">
	<head>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.micss">
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		<title>Log-in</title>
	</head>
	<body>
		<?php session_start(); ?>
		<br>
		
		<div id="banner" style="background-size:cover">
			<div class="container">
				<h1>To-do</h1>
				<h3>I cant seem to finish... :(</h3>
			</div>
		</div>
		<div id="forminput">
		<br>
			<fieldset style="width:30%" class="form-custom">
				<form action="login.php" id="loginForm" class="form col-md-12 center-block">
					<h2>Log-In</h2>
				<div class="err" id="add_err"></div>
					<label class="User_log"></label>
					<input class="form-control" type="text" id="user_name" name="user_name" placeholder="Username"/>
					<label class="User_pass"></label>
					<input class="form-control" type="password" id="password" name="password" placeholder="Password"/>
					<label></label><br/>
					<input type="submit" class="btn btn-primary" id="login" value="Login"/><br><br>
					<p>Need an account? <a href="signup.php">Register</a></p>
				</form>
			</fieldset>
		</div>
		
		<div id="shadow" class="popup"></div>
	<script src="js/mainlogin.js"></script>
	</body>
</html>