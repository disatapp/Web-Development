<?php 
	session_start();
	$dbhost = 'oniddb.cws.oregonstate.edu';
	$dbname = 'disatapp-db';
	$dbuser = 'disatapp-db';
	$dbpass = 'TQOOIdfsDRGWJkvj';

	$mysqli=mysql_connect($dbhost,$dbuser,$dbpass,$dbname);

	$id = $_POST["id"]; 
	$text = $_POST["text"]; 
	$check = $_POST["check"]; 
	
	if($text) {
	$success_update = mysql_query("UPDATE todolist SET description='$text' WHERE id='$id' ");
	}
	
	if($check) {
	$success_update = mysql_query("UPDATE todolist SET check_value='$check' WHERE id='$id' ");
	echo $check;
	} 
?>
