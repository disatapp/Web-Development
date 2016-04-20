<?php 
session_start();
session_destroy(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Info from piazza</title>
	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    </head>
	<body>
		<h1> String and Name </h1><br><br>
    	<div>
	    	<form method="post" action="session.php">
	    		<label>Name<input type="text" name="name" /></label><br>
	    		<label>Input 1<input type="text" name="in1" /></label><br>
	    		<label>Input 2<input type="text" name="in2" /></label><br><br>
	     		<input type="submit" name="submit" value="Go play with strings!" />
	    	</form>
        </div>
    </body>
</html>