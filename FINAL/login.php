<?php
session_start();
$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'disatapp-db';
$dbuser = 'disatapp-db';
$dbpass = 'TQOOIdfsDRGWJkvj';


$username = $_POST['name'];
$password = ($_POST['pwd']);
$mysqli=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$query = "SELECT * FROM UserName WHERE userName='$username' AND pass='$password'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			echo 'true';
			$_SESSION['user_name']=$row['userName'];
		}
		else{
			echo 'false';
		}
?>