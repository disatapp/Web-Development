<?php

$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'disatapp-db';
$dbuser = 'disatapp-db';
$dbpass = 'TQOOIdfsDRGWJkvj';

$user = $_REQUEST['username'];
$mysqli=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$query = "SELECT * FROM UserName WHERE userName='$user' ";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);

	if( $num_row > 0 ) {
		echo 'false';
	}
	else{
		echo 'true';
	}
	?>