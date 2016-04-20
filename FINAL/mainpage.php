<!DOCTYPE HTML>
<html lang="en">
	<head>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/datapicker3.css">
		<link href="css/toastr.css" rel="stylesheet"/>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.micss">
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="bootstrap-datepicker.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="js/toastr.js"></script>
		<title>Log-in</title>
	</head>
<body>
	<?php session_start(); ?>
	<div id="login_state">
	<?php if(isset($_SESSION['user_name'])){?>
	<a href='logout.php' id='logout'>Logout</a>
	<?php }else {?>
	<a id="login_a" href="#">login</a>
	<?php } ?>
	</div>
	<div id="banner">
		<div class="container">
			<h1>Testing</h1>
			<h3>This is blow your mind</h3>
		</div>
	</div>
	<div id="login_form">
		<fieldset style="width:30%"><legend>LOG-IN HERE</legend>
		<form action="login.php" class="form col-md-12 center-block">
				<label class="User_log"></label>
				<input  class="form-control" type="text" id="user_name" name="user_name" placeholder="Username"/>
				<label class="User_pass"></label><br/>
				<input class="form-control" type="password" id="password" name="password" placeholder="Password"/>
				<label></label><br/>
				<input type="submit" class="btn btn-primary" id="login" value="Login" />
				<input type="button" class="btn btn-default" id="cancel_hide" value="Sign Up" /><br><br>
		</form>
		</fieldset>
	</div>
	<div id="shadow" class="popup"></div>
	
	<div id="user_form">
		<fieldset style="width:50%"><legend>SIGN-UP HERE</legend>
		
		<form action="login.php" class="form col-md-12 center-block">
				<div class="control-group">
					<label class="control-label" for="name">First Name</label>
					<div class="controls">
						<input class="form-control" type="text" name="first">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="name">Last Name</label>
					<div class="controls">
						<input class="form-control" type="text" name="Last">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="name">Username</label>
					<div class="controls">
						<input class="form-control" type="text" name="username1">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="name">Password</label>
					<div class="controls">
						<input class="form-control" type="password" name="passfield1">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="name">Re-Password</label>
					<div class="controls">
						<input class="form-control" type="password" name="passfield2">
					</div>
				</div>

				<label></label><br/>
				<input type="submit" class="btn btn-primary" id="signup" value="Sign up" />
				<input type="button" class="btn btn-default" id="cancel_sign" value="Cancel" />
		</form>
		</fieldset>
	</div>
</body>
<script>
	$(document).ready(function()
	{
        $("#login_form").show();
		$("#user_form").hide();
		
	
		$("#login_a").click(function()
		{
			$("#shadow").fadeIn("normal");
			$("#login_form").fadeIn("normal");
			$("#user_name").focus();
		});
		
		$("#cancel_hide").click(function(){
			$("#user_form").fadeOut();
			$("#shadow").fadeOut();
			$("#login_form").fadeIn("normal");
			$("#first").focus();
		});
	
		$("#login").click(function()
		{
		password=$("#password").val();
		username=$("#user_name").val();
			$.ajax({
			type: "POST",
			url: "login.php",
			data: "name="+username+"&pwd="+password,
			success: function(html){
				if(html == 'true')
				{
					$("#login_form").fadeOut("normal");
					$("#shadow").fadeOut("normal);
					$("#login_state").html("<a href='logout.php' id='logout'>Logout</a>");
					toastr.success('Successfully log-in.');
				}
				else
				{
					$("#add_err").html("Wrong username or password");
				}
			},
				beforeSend:function()
				{
					$("#add_err").html("Loading...")
				}
			});
			return false;
		});
	});
</script>
<script src="js/jquery.validate.js"></script>
</html>