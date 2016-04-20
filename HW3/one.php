<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>php:without a paddle</title>
	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    </head>
    <body>
    	<div>
    	<form method="post">
    		<label>Buyer <input type="text" name="b"/></label><br>
    		<label>Fruit <input type="text" name="f"/></label><br>
    		<label>Cost <input type="text" name="q"/></label><br>
     		<input type="submit" name="submit" value="Submit Values" />
    	</form>

	<?php
	$dbhost = 'oniddb.cws.oregonstate.edu';
	$dbname = 'disatapp-db';
	$dbuser = 'disatapp-db';
	$dbpass = 'TQOOIdfsDRGWJkvj';

	$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
	or die("Error connecting to database server");

	mysql_select_db($dbname, $mysql_handle)
	or die("Error selecting database: $dbname");
	

		mysql_query("INSERT INTO myfruit VALUES ( '$_POST[b]', '$_POST[f]', '$_POST[q]')"); 
		$sumc = 0;
		$data = mysql_query("SELECT * FROM myfruit LIMIT 10") 
		or die(mysql_error()); 
		
			echo "<table>";
			echo "<tr>";
			echo "<th>Name</th>";
			echo "<th>Fruit</th>";
			echo "<th>Cost</th>";
			echo "</tr>";
				
			while($info = mysql_fetch_array( $data )) 
			{ 
				echo "<tr>"; 
				echo "<td>".$info['name'] . "</td> "; 
				echo "<td>".$info['fruit'] ."</td> "; 
				echo "<td>".$info['cost'] . "</td></tr> "; 
				$sumc = $sumc + $info['cost'];
			}		 
			echo "</table>";  
		
		echo "<b>The sum cost is: $sumc </b>"
	?>

		</div>
    </body>
	
</html>