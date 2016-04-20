<?php
	$dbhost = 'oniddb.cws.oregonstate.edu';
	$dbname = 'disatapp-db';
	$dbuser = 'disatapp-db';
	$dbpass = 'TQOOIdfsDRGWJkvj';
		
	$connection = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
	$database = mysql_select_db($dbname) or die(mysql_error());
	
	$document_get = mysql_query("SELECT * FROM UserName WHERE userName='$username'");
	$match_value = mysql_fetch_array($document_get);
	$user_id = $match_value['id'];
	
	if (isset($_POST['submit_val'])) {
			if ($_POST['dynfields']) {
				foreach ( $_POST['dynfields'] as $key=>$value ) {
				$values = mysql_real_escape_string($value);
				$query = mysql_query("INSERT INTO todolist (user_id, description, check_value) VALUES ('$user_id', '$values', 'false')");
			}
		}
		mysql_close();
		}
		
?>