<!DOCTYPE HTML>
<html lang="en">
	<head>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.micss">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	</head>
	<body>
		<?php session_start(); ?>
				<br><br>
						<br><br>
								<br><br>
	<div id="forminput">
			<fieldset style="width:40%" class='form-custom'>
				<form class="form col-md-12 center-block " id="signupForm">
				<legend>Sign-Up</legend>
					<div>
						<label for="firstname">Firstname</label>
						<input class="form-control" id="firstname" name="firstname" type="text"/>
					</div>
					<div>
						<label for="lastname">Lastname</label>
						<input class="form-control" id="lastname" name="lastname" type="text"/>
					</div>
					<div>
						<label for="username">Username</label>
						<input class="form-control" id="username" name="username" type="text"/>
					</div>
					<div>
						<label for="password">Password</label>
						<input class="form-control" id="password" name="password" type="password" />
					</div>
					<div>
						<label for="confirm_password">Confirm Password</label>
						<input class="form-control" id="confirm_password" name="confirm_password" type="password">
					</div>
					<div>
					</div></br>
					<button class="btn btn-primary signup" id="signup">Sign up</button><br><br>
					<p>Already have an account? <a href="main.php">Sign in</a></p>
				</form>
			</fieldset>
			
		</div>

		<span id="result"></span>
		<script src="js/signuplogin.js"></script>
	</body>
</html>